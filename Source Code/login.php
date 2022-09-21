<?php
    session_start();
    require_once('inc/header.php');
    require_once ('inc/config.php');
    require_once('inc/functions.php');
?>

<!-- Body Starts -->
    <body style="background-image: url('res/background2.jpg')">
        <?php
            require_once ('inc/navbar.php');
            $username_err = $password_err = "";
            extract($_POST);
        ?>

        <?php
        if (isset($_POST['loginButton'])){

            if (!$username) {
                $username_err = "Username Required";
            }

            if (!$password) {
                $password_err = "Password Required";
            }

            global $conn;
            $sql = "";
            $location = "";

            if($username && $password && $typeRadio) {
                if ($typeRadio == "user") {
                    $sql = "SELECT user_id FROM `user` WHERE username = '$username' && password = '$password' && status = 'approved'";
                    $result = $conn->query($sql);

                    if ($result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['showMessage'] = 1;
                        header("location: userHome.php");
                    } else {
                        outputMessage("Warning!!!", "Please Give Correct Information.", "danger");
                    }
                } else if ($typeRadio == "librarian") {
                    $sql = "SELECT librarian_id FROM `librarian` WHERE username = '$username' && password = '$password'";
                    $result = $conn->query($sql);

                    if ($result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        $_SESSION['librarian_id'] = $row['librarian_id'];
                        $_SESSION['showMessage'] = 1;
                        header("location: librarianHome.php");
                    } else {
                        outputMessage("Warning!!!", "Please Give Correct Information.", "danger");
                    }
                } else {
                    if ($username == "admin" && $password == "admin") {
                        $_SESSION['showMessage'] = 1;
                        $_SESSION['adminSession'] = "admin";
                        header('location: directorHome.php');
                    } else {
                        outputMessage("Warning!!!", "Please Give Correct Information.", "danger");
                    }
                }
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
                            <label class="form-label" >Username</label>
                            <input name="username" type="text" class="form-control form-control-lg"
                                   placeholder="Type your username" value="<?php if ($username != 'root') echo $username;?>"/>
                            <span class="warning"><?php echo $username_err; ?></span>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" >Password</label>
                            <input name="password" type="password" class="form-control form-control-lg"
                                   placeholder="Type your password" value="<?php echo $password;?>"/>
                            <span class="warning"><?php echo $password_err; ?></span>
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

                        <div class="pt-2">
                            <table>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typeRadio" value="user" checked>
                                            <label class="form-label">
                                                User
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typeRadio" value="librarian">
                                            <label class="form-label">
                                                Librarian
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="typeRadio" value="director">
                                            <label class="form-label">
                                                Director
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="text-center text-lg-start mt-4">
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
