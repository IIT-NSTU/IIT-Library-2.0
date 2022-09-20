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
        global $conn;

            if(isset($_POST['remove_librarian'])) {
                if($conn->query("DELETE FROM `librarian` WHERE `librarian`.`librarian_id` = '{$_POST['remove_librarian']}'")){
                    outputMessage("Librarian request is removed!!!", "", "danger");
                }
            }
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                        <tr>
                            <td colspan="7">
                                <h2 class="text-center fw-bold">Available Librarians</h2>
                            </td>
                        </tr>

                        <tr>
                            <th>No</th>
                            <th>Librarian ID</th>
                            <th>Name</th>
                            <th>Present Address</th>
                            <th>Post Code</th>
                            <th>Mobile Number</th>
                            <th>Action</th>
                        </tr>

                    <?php
                    $result = $conn->query("SELECT * FROM `librarian`");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['librarian_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['present_address']; ?>
                            </td>
                            <td>
                                <?php echo $row['pr_post_code']; ?>
                            </td>
                            <td>
                                <?php echo $row['mobile_number']; ?>
                            </td>
                            <td>
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                    <button type="submit" class="btn btn-danger text-light fw-bold" name="remove_librarian" value="<?php echo $row['librarian_id'];?>">Remove</button>
                                </form>

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

