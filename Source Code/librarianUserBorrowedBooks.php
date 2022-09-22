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
            if(isset($_POST['return_book'])) {
                $date = date("Y-m-d H:i:s");
                $conn->query("UPDATE `borrow` SET `return_date` = '$date' WHERE `borrow`.`borrow_id` = '{$_POST['return_book']}'");
                $conn->query("UPDATE `borrow` SET `fine` = 'Paid' WHERE `borrow`.`borrow_id` = '{$_POST['return_book']}'");

                $result2 = $conn->query("SELECT * FROM `borrow` WHERE `borrow_id` = '{$_POST['return_book']}'");
                $row2 = $result2->fetch_assoc();
                $conn->query("UPDATE `accession_isbn` SET `borrowed` = 'no' WHERE `accession_isbn`.`accession` = '{$row2['accession_number']}'");
                outputMessage("Book received successfully!!!", "", "success");
            }

            if (isset($_POST['sendMail'])) {
                $result3 = $conn->query("SELECT user.email_address FROM user WHERE user_id = (SELECT user_id FROM `borrow` WHERE borrow_id = 'B13761643252')");
                $row3 = $result3->fetch_assoc();
                sendMail($row3['email_address'], "Please Return The Book", "Sir! Your due is has crossed the limit. Please Return the Book");
                outputMessage("Mail Sent successfully!!!", "", "success");
            }
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th colspan="10">
                            <h2 class="text-center fw-bold">User Borrowed Books</h2>
                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Borrow ID</th>
                        <th>User ID</th>
                        <th>Accession Number</th>
                        <th>Borrow Date & Time</th>
                        <th>Valid Until</th>
                        <th>Return Date & Time</th>
                        <th>Days Passed After Due Date</th>
                        <th>Fine</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $conn;
                    $result = $conn->query("SELECT * FROM `borrow`");
                    $count = 1;
                    $fine = 0;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['borrow_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['user_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['accession_number']; ?>
                            </td>
                            <td>
                                <?php echo $row['borrow_date']; ?>
                            </td>
                            <td>
                                <?php echo $row['due_date']; ?>
                            </td>
                            <td>
                                <?php
                                    if ($row['return_date'] == "") {
                                        echo "<form action='{$_SERVER['PHP_SELF']}' method='POST'>
                                                   <button class='btn btn-success fw-bold' type='submit' name='return_book' value='{$row['borrow_id']}'>Receive Now</button>
                                              </form>";
                                    } else {
                                        echo $row['return_date'];
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($row['return_date'] != "") {
                                        $now = strtotime($row['return_date']);
                                    } else {
                                        $now = time();
                                    }

                                    $dueDate = strtotime($row['due_date']);
                                    $difference = ($now - $dueDate);
                                    if ($difference < 0) {
                                        $difference = 0;
                                    } else {
                                        $difference = round(($difference) / (60 * 60 * 24));
                                    }
                                echo $difference." days";
                                ?>
                            </td>
                            <td>
                                <?php
                                    $bookFine = $difference * 2;
                                    $fine = $fine + $bookFine;
                                    echo $bookFine." Tk";
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($difference > 0) {
                                        echo "<form action='{$_SERVER['PHP_SELF']}' method='POST'>
                                                   <button class='btn btn-warning fw-bold' type='submit' name='sendMail' value='{$row['borrow_id']}'>Send Mail</button>
                                              </form>";
                                    }
                                ?>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                        <tr>
                            <td colspan="8" style="text-align: right; font-weight: bold">
                                Total Fine
                            </td>
                            <td style="font-weight: bold">
                                <?php echo $fine." Tk"; ?>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

