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
            if(isset($_POST['recommend'])) {
                if($conn->query("UPDATE `user` SET `status` = 'recommended' WHERE `user`.`user_id` = '{$_POST['recommend']}'")){
                    outputMessage("User is recommended for approval!!!", "", "success");
                }

                $result2 = $conn->query("SELECT * FROM `user` WHERE `user`.`user_id` = '{$_POST['recommend']}'");
                $row2 = $result2->fetch_assoc();
                $email = $row2['email_address'];
                $name = $row2['name'];

                sendMail($email, "Registration Recommended", "Hii! $name, Your registration request is forwarded to the Director, IIT NSTU.");
            }

            if(isset($_POST['remove_request'])) {
                if($conn->query("DELETE FROM `user` WHERE `user`.`user_id` = '{$_POST['remove_request']}'")){
                    outputMessage("User request is rejected!!!", "", "danger");
                }

                $result2 = $conn->query("SELECT * FROM `user` WHERE `user`.`user_id` = '{$_POST['remove_request']}'");
                $row2 = $result2->fetch_assoc();
                $email = $row2['email_address'];
                $name = $row2['name'];

                sendMail($email, "Registration Rejected", "Hii! $name, Unfortunately Your registration request is rejected.");
            }
        ?>

    <!-- <main> -->
        <div class="container mt-5 mb-5">
            <table class="table table-bordered table-hover text-center">
                <thead>
                <tr>
                    <th>No</th>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <?php
                    $conn;
                    $result = $conn->query("SELECT * FROM `user` WHERE `user`.`status` = 'new'");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['user_id']; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <a href="librarianUserDetails.php?userID=<?php echo $row['user_id']?>" class="btn bg-dark-blue text-light fw-bold">Show Details</a>
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


