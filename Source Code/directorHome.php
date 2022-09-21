<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once('inc/functions.php');
?>

<?php
    if(!isset($_SESSION['adminSession'])) {
        header("location: index.php");
    }
?>
<!-- Body Starts -->
    <body>
        <?php
            require_once('inc/directorNavbar.php');
        ?>

        <?php
            if ($_SESSION['showMessage'] == 1) {
                outputMessage("Successfully Logged In!!!", "Welcome to IIT Library");
                $_SESSION['showMessage'] = 0;
            }
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <td colspan="7">
                            <h2 class="text-center fw-bold">Top 5 Books (In Quantity)</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        <th>Source</th>
                        <th>Number of Books</th>
                    </tr>

                    <?php
                    global $conn;
                    $result = $conn->query("SELECT * FROM `book` WHERE `no_of_books` > 0 ORDER BY `no_of_books` DESC LIMIT 0 , 5");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['title']; ?>
                            </td>
                            <td>
                                <?php echo $row['author']; ?>
                            </td>
                            <td>
                                <?php echo $row['edition']; ?>
                            </td>
                            <td>
                                <?php echo $row['publisher']; ?>
                            </td>
                            <td>
                                <?php echo $row['source']; ?>
                            </td>
                            <td>
                                <?php echo $row['no_of_books']; ?>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                </table>
            </div>

            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <td colspan="5">
                            <h2 class="text-center fw-bold">Top 5 Borrowers</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Present Address</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                    </tr>

                    <?php
                    global $conn;
                    $result = $conn->query("SELECT * FROM `borrow`, `user` WHERE `borrow`.`user_id` = `user`.`user_id` GROUP BY `user`.`user_id` LIMIT 0 , 5");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['present_address']; ?>
                            </td>
                            <td>
                                <?php echo $row['email_address']; ?>
                            </td>
                            <td>
                                <?php echo $row['mobile_number']; ?>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                </table>
            </div>

            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <td colspan="6">
                            <h2 class="text-center fw-bold">Top 5 Borrowed Books</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        <th>Source</th>
                    </tr>

                    <?php
                    global $conn;
                    $result = $conn->query("SELECT * FROM `accession_isbn`, `book` WHERE `accession_isbn`.`isbn` = `book`.`isbn` AND `accession_isbn`.`borrowed` = 'yes' GROUP BY `accession_isbn`.`isbn` LIMIT 0 , 5");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['title']; ?>
                            </td>
                            <td>
                                <?php echo $row['author']; ?>
                            </td>
                            <td>
                                <?php echo $row['edition']; ?>
                            </td>
                            <td>
                                <?php echo $row['publisher']; ?>
                            </td>
                            <td>
                                <?php echo $row['source']; ?>
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

