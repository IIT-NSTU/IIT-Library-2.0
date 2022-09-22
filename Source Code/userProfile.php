<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once('inc/functions.php');
?>

<?php
    if(!isset($_SESSION['user_id'])) {
        header("location: index.php");
    }
?>

<!-- Body Starts -->
    <body>
        <?php
            require_once('inc/userNavbar.php');
        ?>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $father_name = $mother_name = $present_address = $present_address_post_code = $permanent_address = $permanent_address_post_code = $phone = $password = "";

                if (isset($_POST['father_name'])) {
                    $father_name = $_POST['father_name'];
                }

                if (isset($_POST['mother_name'])) {
                    $mother_name = $_POST['mother_name'];
                }

                if (isset($_POST['permanent_address'])) {
                    $permanent_address = $_POST['permanent_address'];
                }

                if (isset($_POST['permanent_address_post_code'])) {
                    $permanent_address_post_code = $_POST['permanent_address_post_code'];
                }

                if (isset($_POST['present_address'])) {
                    $present_address = $_POST['present_address'];
                }

                if (isset($_POST['present_address_post_code'])) {
                    $present_address_post_code = $_POST['present_address_post_code'];
                }

                if (isset($_POST['phone'])) {
                    $phone = $_POST['phone'];
                }

                if (isset($_POST['password'])) {
                    $password = $_POST['password'];
                }
                $userID = $_SESSION['user_id'];
                global $conn;
                $conn->query("UPDATE `user` SET `father_name` = '{$father_name}' WHERE `user`.`user_id` = '{$userID}'");
                $conn->query("UPDATE `user` SET `mother_name` = '{$mother_name}' WHERE `user`.`user_id` = '{$userID}'");
                $conn->query("UPDATE `user` SET `present_address` = '{$present_address}' WHERE `user`.`user_id` = '{$userID}'");
                $conn->query("UPDATE `user` SET `pr_post_code` = '{$present_address_post_code}' WHERE `user`.`user_id` = '{$userID}'");
                $conn->query("UPDATE `user` SET `permanent_address` = '{$permanent_address}' WHERE `user`.`user_id` = '{$userID}'");
                $conn->query("UPDATE `user` SET `pa_post_code` = '{$permanent_address_post_code}' WHERE `user`.`user_id` = '{$userID}'");
                $conn->query("UPDATE `user` SET `mobile_number` = '{$phone}' WHERE `user`.`user_id` = '{$userID}'");
                $conn->query("UPDATE `user` SET `password` = '{$password}' WHERE `user`.`user_id` = '{$userID}'");
                outputMessage("Data Updated Successfully!!!", "", "success");
            }
        ?>

        <?php
            $userID = $_SESSION['user_id'];
            global $conn;
            $sql = "SELECT * FROM `user` where user_id = '{$userID}'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        ?>

        <!-- <main> -->
        <?php
            echo "<div class='container mt-5 mb-5'>
                    <div class='row justify-content-center'>
                        <div class='col-md-5 border-right'>
                            <div class='d-flex flex-column align-items-center text-center p-3 py-5'>
                                <img class='rounded-circle mt-5' width='150px' src='res/profile.png'>
                                <span class='form-label mt-5'>Username : {$row['username']}</span>
                                <span class='form-label'>Email : {$row['email_address']}</span>
                                <span class='form-label'>User ID : {$row['user_id']}</span>
                            </div>
                        </div>
                        <div class='col-md-7'>
                            <div class='p-3 py-5'>
                                <div class='d-flex justify-content-center mb-5'>
                                    <h4 class='form-label'>Profile Settings</h4>
                                </div>
                                <form action='userProfile.php' method='POST'>
                                    <div class='row mt-2'>
                                        <div class='col-md-6'>
                                            <label class='form-label'>Father's Name</label>
                                            <input type='text' class='form-control' name='father_name' value='{$row['father_name']}' required>
                                        </div>
                                        <div class='col-md-6'>
                                            <label class='form-label'>Mother's Name</label>
                                            <input type='text' class='form-control' name='mother_name' value='{$row['mother_name']}' required>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12 mt-3'>
                                            <label class='form-label'>Mobile Number</label>
                                            <input type='text' class='form-control' name='phone' value='{$row['mobile_number']}' required>
                                        </div>
                                        <div class='col-md-12 mt-3'>
                                            <label class='form-label'>Present Address</label>
                                            <input type='text' class='form-control' name='present_address' value='{$row['present_address']}' required>
                                        </div>
                                        <div class='col-md-12 mt-3'>
                                            <label class='form-label'>Postcode</label>
                                            <input type='number' class='form-control' name='present_address_post_code' value='{$row['pr_post_code']}' required>
                                        </div>
                                        <div class='col-md-12 mt-3'>
                                            <label class='form-label'>Permanent Address</label>
                                            <input type='text' class='form-control' name='permanent_address' value='{$row['permanent_address']}' required>
                                        </div>
                                        <div class='col-md-12 mt-3'>
                                            <label class='form-label'>Postcode</label>
                                            <input type='number' class='form-control' name='permanent_address_post_code' value='{$row['pa_post_code']}' required>
                                        </div>
                                        <div class='col-md-12 mt-3'>
                                            <label class='form-label'>Password</label>
                                            <input type='password' class='form-control' name='password' value='{$row['password']}' required>
                                        </div>
                                    </div>                           
                                    <div class='mt-5 text-center'>
                                        <button class='btn bg-dark-blue text-light fw-bold' type='submit'>Save Profile</button>
                                    </div>
                                </form>                              
                            </div>
                        </div>
                    </div>
                </div>";
        ?>

        <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

