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
        $librarianID = $_SESSION['librarian_id'];
        global $conn;
        $sql = "SELECT * FROM `librarian` where librarian_id = '{$librarianID}'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $present_address = $present_address_post_code = $permanent_address = $permanent_address_post_code = $phone = $password = "";

            if (isset($_POST['present_address_post_code'])) {
                $present_address_post_code = $_POST['present_address_post_code'];
            }

            if (isset($_POST['present_address'])) {
                $present_address = $_POST['present_address'];
            }

            if (isset($_POST['permanent_address'])) {
                $permanent_address = $_POST['permanent_address'];
            }

            if (isset($_POST['permanent_address_post_code'])) {
                $permanent_address_post_code = $_POST['permanent_address_post_code'];
            }

            if (isset($_POST['phone'])) {
                $phone = $_POST['phone'];
            }

            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }

            $conn->query("UPDATE `librarian` SET `present_address` = '{$present_address}' WHERE `librarian`.`librarian_id` = '{$librarianID}'");
            $conn->query("UPDATE `librarian` SET `pr_post_code` = '{$present_address_post_code}' WHERE `librarian`.`librarian_id` = '{$librarianID}'");
            $conn->query("UPDATE `librarian` SET `permanent_address` = '{$permanent_address}' WHERE `librarian`.`librarian_id` = '{$librarianID}'");
            $conn->query("UPDATE `librarian` SET `pa_post_code` = '{$permanent_address_post_code}' WHERE `librarian`.`librarian_id` = '{$librarianID}'");
            $conn->query("UPDATE `librarian` SET `mobile_number` = '{$phone}' WHERE `librarian`.`librarian_id` = '{$librarianID}'");
            $conn->query("UPDATE `librarian` SET `password` = '{$password}' WHERE `librarian`.`librarian_id` = '{$librarianID}'");
            outputMessage("Data Updated Successfully!!!", "Please Refresh the Page!", "success");
        }
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
                                    </div>
                                </div>
                                <div class='col-md-7'>
                                    <div class='p-3 py-5'>
                                        <div class='d-flex justify-content-center mb-5'>
                                            <h4 class='form-label'>Profile Settings</h4>
                                        </div>
                                        <form action='librarianProfile.php' method='POST'>
                                            <div class='row mt-2'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Present Address</label>
                                                    <input type='text' class='form-control' name='present_address' value='{$row['present_address']}' required>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Postcode</label>
                                                    <input type='number' class='form-control' name='present_address_post_code' value='{$row['pr_post_code']}' required>
                                                </div>
                                            </div>
                                            <div class='row mt-2'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Permanent Address</label>
                                                    <input type='text' class='form-control' name='permanent_address' value='{$row['permanent_address']}' required>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Postcode</label>
                                                    <input type='number' class='form-control' name='permanent_address_post_code' value='{$row['pa_post_code']}' required>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Mobile Number</label>
                                                    <input type='text' class='form-control' name='phone' value='{$row['mobile_number']}' required>
                                                </div> 
                                            </div>  
                                            <div class='row'>
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

