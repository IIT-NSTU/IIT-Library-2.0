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
        $userID = $_GET['userID'];
        global $conn;
        $sql = "SELECT * FROM `user` where user_id = '{$userID}'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>

                    <!-- <main> -->
                        <div class='container mt-5 mb-3'>
                            <div class='row justify-content-center rounded-border-white-background'>
                                <div class='row'>
                                    <div class='d-flex flex-column align-items-center text-center p-3 py-5'>
                                        <img class='rounded-circle mt-5' width='150px' src='res/profile.png'>
                                        <span class='form-label mt-5'>Username : <?php echo $row['username']; ?></span>
                                        <span class='form-label'>Email : <?php echo $row['email_address']; ?></span>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div>
                                        <div class='d-flex justify-content-center mb-5'>
                                            <h4 class='form-label'>User Details</h4>
                                        </div>
                                            <div class='row'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>User ID</label>
                                                    <input type='text' class='form-control' name='phone' value='<?php echo $row['user_id']; ?>' disabled>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Name</label>
                                                    <input type='text' class='form-control' name='phone' value='<?php echo $row['name']; ?>' disabled>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6 mt-3'>
                                                    <label class='form-label'>Father's Name</label>
                                                    <input type='text' class='form-control' name='present_address' value='<?php echo $row['father_name']; ?>' disabled>
                                                </div>
                                                <div class='col-md-6 mt-3'>
                                                    <label class='form-label'>Mother's Name</label>
                                                    <input type='text' class='form-control' name='present_address_post_code' value='<?php echo $row['mother_name']; ?>' disabled>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Date of Birth</label>
                                                    <input type='text' class='form-control' name='phone' value='<?php echo $row['date_of_birth']; ?>' disabled>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6 mt-3'>
                                                    <label class='form-label'>Present Address</label>
                                                    <input type='text' class='form-control' name='present_address' value='<?php echo $row['present_address']; ?>' disabled>
                                                </div>
                                                <div class='col-md-6 mt-3'>
                                                    <label class='form-label'>Postcode</label>
                                                    <input type='number' class='form-control' name='present_address_post_code' value='<?php echo $row['pr_post_code']; ?>' disabled>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-6 mt-3'>
                                                    <label class='form-label'>Permanent Address</label>
                                                    <input type='text' class='form-control' name='permanent_address' value='<?php echo $row['permanent_address']; ?>' disabled>
                                                </div>
                                                <div class='col-md-6 mt-3'>
                                                    <label class='form-label'>Postcode</label>
                                                    <input type='number' class='form-control' name='permanent_address_post_code' value='<?php echo $row['pa_post_code']; ?>' disabled>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Mobile Number</label>
                                                    <input type='text' class='form-control' name='phone' value='<?php echo $row['mobile_number']; ?>' disabled>
                                                </div> 
                                            </div>
                                            <?php
                                                if($row['roll_number'] != "") {
                                                    echo "<div class='row'>
                                                            <div class='col-md-12 mt-3'>
                                                                <label class='form-label'>Roll Number</label>
                                                                <input type='text' class='form-control' name='phone' value='{$row['roll_number']}' disabled>
                                                            </div> 
                                                          </div>
                                                          <div class='row'>
                                                            <div class='col-md-12 mt-3'>
                                                                <label class='form-label'>Session</label>
                                                                <input type='text' class='form-control' name='phone' value='{$row['session']}' disabled>
                                                            </div> 
                                                          </div>";
                                                } else {
                                                    echo "<div class='row'>
                                                            <div class='col-md-12 mt-3'>
                                                                <label class='form-label'>Personal Identification Number</label>
                                                                <input type='text' class='form-control' name='phone' value='{$row['pin']}' disabled>
                                                            </div> 
                                                          </div>
                                                          <div class='row'>
                                                            <div class='col-md-12 mt-3'>
                                                                <label class='form-label'>Designation</label>
                                                                <input type='text' class='form-control' name='phone' value='{$row['designation']}' disabled>
                                                            </div> 
                                                          </div>";
                                                }

                                            ?>
                                            <form action="directorUsers.php" method="POST">
                                                <div class='mt-5 text-center'>
                                                    <button class='btn btn-success fw-bold' type='submit' name="approve" value='<?php echo $userID;?>'>Approve</button>
                                                </div>
                                                <div class='mt-2 text-center'>
                                                    <button class='btn btn-warning fw-bold' type='submit' name="recheck" value='<?php echo $userID;?>'>Send for Recheck</button>
                                                </div>
                                                <div class='mt-2 mb-5 text-center'>
                                                    <button class='btn btn-danger fw-bold' type='submit' name="remove_request" value='<?php echo $userID;?>'>Remove Request</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </main> -->

</body>
<!-- Body Ends -->

<section class="goTopButton">
    <a href="#">
        <img src="res/top.png" alt="top" width="50px">
    </a>
</section>

<?php
    require_once('inc/footer.php');
?>

