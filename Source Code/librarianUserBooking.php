<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once('inc/functions.php');
?>

<?php
    if(!isset($_SESSION['librarian_id'])) {
        header("location: index.php");
    }
?>

<!-- Body Starts -->
    <body>

        <?php
            require_once('inc/librarianNavbar.php');
        ?>

        <?php
            global $conn;
            if(isset($_POST['cancel_booking'])) {

                $result2 = $conn->query("SELECT accession_number FROM `booking` WHERE `booking_id` = '{$_POST['cancel_booking']}'");
                $row2 = $result2->fetch_assoc();
                $conn->query("UPDATE `accession_isbn` SET `borrowed` = 'no' WHERE `accession_isbn`.`accession` = '{$row2['accession_number']}'");

                $conn->query("DELETE FROM `booking` WHERE `booking_id` = '{$_POST['cancel_booking']}'");
                outputMessage("Booking is canceled successfully!!!", "", "success");
            }

            if(isset($_POST['give_book'])) {
                $result2 = $conn->query("SELECT * FROM `booking` WHERE `booking_id` = '{$_POST['give_book']}'");
                $row2 = $result2->fetch_assoc();
                $conn->query("UPDATE `accession_isbn` SET `borrowed` = 'yes' WHERE `accession_isbn`.`accession` = '{$row2['accession_number']}'");

                $conn->query("DELETE FROM `booking` WHERE `booking_id` = '{$_POST['give_book']}'");
                $borrowDate = date("Y-m-d H:i:s", strtotime('+4 hours'));
                $dueDate = date("Y-m-d H:i:s", strtotime('+172 hours'));
                $conn->query("INSERT INTO `borrow` (`borrow_id`, `user_id`, `accession_number`, `borrow_date`, `due_date`, `return_date`) VALUES ('{$_POST['give_book']}', '{$row2['user_id']}', '{$row2['accession_number']}', '$borrowDate', '$dueDate', ''");
                outputMessage("Booking is converted to borrow successfully!!!", "", "success");
            }
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <td colspan="7">
                            <h2 class="text-center fw-bold">User Bookings</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Booking ID</th>
                        <th>User ID</th>
                        <th>Accession Number</th>
                        <th>Booking Date & Time</th>
                        <th>Valid Until</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $conn;
                    $result = $conn->query("SELECT * FROM `booking`");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['booking_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['user_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['accession_number']; ?>
                            </td>
                            <td>
                                <?php echo $row['date']; ?>
                            </td>
                            <td>
                                <?php
                                    $date = $row['date'];
                                    echo date("Y-m-d H:i:s", strtotime($date .'+72 hours'));
                                ?>
                            </td>
                            <td>
                                <?php
                                    $dateNow = date("Y-m-d H:i:s");
                                    $bookingValid = date("Y-m-d H:i:s", strtotime($date .'+72 hours'));

                                    if ($dateNow > $bookingValid) {
                                        echo "<form action='{$_SERVER['PHP_SELF']}' method='POST'>
                                                    <button class='btn btn-danger fw-bold' type='submit' name='cancel_booking' value='{$row['booking_id']}'>Cancel Booking</button>
                                                </form>";
                                    } else {
                                        echo "<form action='{$_SERVER['PHP_SELF']}' method='POST'>
                                                    <button class='btn btn-success fw-bold' type='submit' name='give_book' value='{$row['booking_id']}'>Give Book</button>
                                                </form>";
                                    }

                                ?>

                            </td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                </table>
            </div>
        <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

