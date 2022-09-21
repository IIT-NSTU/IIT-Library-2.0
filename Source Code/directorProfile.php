<?php
    session_start();
    require_once('inc/header.php');
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

    <!-- <main> -->
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-5 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="res/profile.png">
                        <span class="form-label mt-5">Dr. Mohammad Salim Hossain</span>
                        <span class="form-label">pharmasalim@nstu.edu.bd</span>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-center mb-5">
                            <h4 class="form-label">Profile Settings</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" placeholder="Type your phone number" value="01711200410">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Present Address</label>
                                <input type="text" class="form-control" placeholder="Type your present address" value="Noakhali">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Postcode</label>
                                <input type="number" class="form-control" placeholder="Type post code of your present address" value="3850">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Permanent Address</label>
                                <input type="text" class="form-control" placeholder="Type your permanent address" value="">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Postcode</label>
                                <input type="number" class="form-control" placeholder="Type post code of your permanent address" value="">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn bg-dark-blue text-light fw-bold" type="button">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

