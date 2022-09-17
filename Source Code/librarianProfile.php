<?php
    session_start();
    require_once('inc/header.php');
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
            require_once('inc/librarianNavbar.php');
        ?>

    <!-- <main> -->
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-5 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="res/profile.png">
                        <span class="form-label mt-5">Prosanto Deb</span>
                        <span class="form-label">prosantodeb7@mail.com</span>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-center mb-5">
                            <h4 class="form-label">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="first name" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Surname</label>
                                <input type="text" class="form-control" value="" placeholder="surname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" placeholder="Type your phone number" value="">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Present Address</label>
                                <input type="text" class="form-control" placeholder="Type your present address" value="">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="form-label">Postcode</label>
                                <input type="number" class="form-control" placeholder="Type post code of your present address" value="">
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
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" placeholder="country" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">State/Region</label>
                                <input type="text" class="form-control" value="" placeholder="state">
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

