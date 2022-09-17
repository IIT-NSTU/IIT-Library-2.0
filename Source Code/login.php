<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/functions.php');
?>

<!-- Body Starts -->
    <body style="background-image: url('res/background2.jpg')">
        <?php
            require_once ('inc/navbar.php');
        ?>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $pass = $_POST['password'];

            if ($email == 'prosantodeb7@gmail.com' && $pass=='12345') {
                $_SESSION['loggedIn'] = 1;
                header('location: userHome.php');
            } else {
                outputMessage("Warning!!!", "Please Give Correct Information.", "danger");
            }
        }
        ?>

<!--        <div class="alert alert-success alert-dismissible fade show">-->
<!--            <strong>Success!</strong> Your message has been sent successfully.-->
<!--            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>-->
<!--        </div>-->
<!---->
<!--        <div class="alert alert-danger">-->
<!--            <strong>Error!</strong> There is a problem.-->
<!--        </div>-->

    <!-- <main> -->

        <div class="container mt-5 mb-5 p-4 rounded-border-white-background">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="res/library.jpg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-sm-5 mt-md-1">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Email address</label>
                            <input name="email" type="email" id="form3Example3" class="form-control form-control-lg"
                                   placeholder="Enter a valid email address" required/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
                                   placeholder="Enter password" required/>
                        </div>

<!--                        <div class="d-flex justify-content-between align-items-center">-->
<!--                            <div class="form-check mb-0">-->
<!--                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />-->
<!--                                <label class="form-check-label" for="form2Example3">-->
<!--                                    Remember me-->
<!--                                </label>-->
<!--                            </div>-->
<!--                            <a href="#!" class="text-body">Forgot password?</a>-->
<!--                        </div>-->

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button name="loginButton" type="submit" class="btn bg-dark-blue btn-lg fw-bold text-light"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- </main> -->
    </body>
<!-- Body Ends -->

<?php
    require_once ('inc/footer.php');
?>
