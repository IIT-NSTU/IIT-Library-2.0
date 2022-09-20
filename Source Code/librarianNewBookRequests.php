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
            if(isset($_POST['resolve'])) {
                if($conn->query("UPDATE `requested_books` SET `status` = 'resolved' WHERE `requested_books`.`request_id` = '{$_POST['resolve']}'")){
                    outputMessage("Book Request Resolved!!!", "", "success");
                }
            }

            if(isset($_POST['process'])) {
                if($conn->query("UPDATE `requested_books` SET `status` = 'processing' WHERE `requested_books`.`request_id` = '{$_POST['process']}'")){
                    outputMessage("Book is under processing!!!", "", "danger");
                }
            }

            if(isset($_POST['reject'])) {
                if($conn->query("UPDATE `requested_books` SET `status` = 'rejected' WHERE `requested_books`.`request_id` = '{$_POST['reject']}'")){
                    outputMessage("User request is rejected!!!", "", "danger");
                }
            }

        if(isset($_POST['notResolve'])) {
            if($conn->query("UPDATE `requested_books` SET `status` = 'not resolved' WHERE `requested_books`.`request_id` = '{$_POST['notResolve']}'")){
                outputMessage("User request could not be resolved!!!", "", "danger");
            }
        }
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <td colspan="11">
                            <h2 class="text-center fw-bold">New Book Requests</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Request ID</th>
                        <th>User ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        <th>Source</th>
                        <th>ISBN</th>
                        <th colspan="2">Action</th>
                    </tr>

                    <?php
                    $result = $conn->query("SELECT * FROM `requested_books` WHERE `requested_books`.`status` = 'new' or `requested_books`.`status` = 'processing'");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['request_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['user_id']; ?>
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
                                <?php echo $row['isbn']; ?>
                            </td>

                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <?php
                                    if($row['status'] == 'new') {
                                        echo "<td>
                                                <button type='submit' class='btn btn-warning text-light fw-bold' name='process' value='{$row['request_id']}'>Process</button>
                                              </td>
                                              <td>
                                                <button type='submit' class='btn btn-danger text-light fw-bold' name='reject' value='{$row['request_id']}'>Reject</button>
                                              </td>";
                                    } else if ($row['status'] == 'processing') {
                                        echo "<td>
                                                <button type='submit' class='btn btn-success text-light fw-bold' name='resolve' value='{$row['request_id']}'>Resolve</button>
                                              </td>
                                              <td>
                                                <button type='submit' class='btn btn-secondary text-light fw-bold' name='notResolve' value='{$row['request_id']}'>Not Resolve</button>
                                              </td>";
                                    }
                                ?>

                            </form>
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

