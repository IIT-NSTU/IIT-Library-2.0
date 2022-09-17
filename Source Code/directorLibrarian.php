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
<body style="background-image: url('res/background3.jpg')">
        <?php
            require_once('inc/directorNavbar.php');
        ?>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $librarianId = $name = $present_address = $present_address_post_code = $permanent_address = $permanent_address_post_code = $phone = $email = $userName = "";

                if (isset($_POST['name'])) {
                    $name = $_POST['name'];
                }

                if (isset($_POST['present_address'])) {
                    $present_address = $_POST['present_address'];
                }

                if (isset($_POST['permanent_address'])) {
                    $permanent_address = $_POST['permanent_address'];
                }

                if (isset($_POST['present_address_post_code'])) {
                    $present_address_post_code = $_POST['present_address_post_code'];
                }

                if (isset($_POST['permanent_address_post_code'])) {
                    $permanent_address_post_code = $_POST['permanent_address_post_code'];
                }

                if (isset($_POST['phone'])) {
                    $phone = $_POST['phone'];
                }

                if (isset($_POST['email'])) {
                    $email = $_POST['email'];
                }

                if (isset($_POST['userName'])) {
                    $userName = $_POST['userName'];
                }

                $librarianId = "L".rand(10000000000,20000000000);

                $sql = "INSERT INTO `librarian` (`librarian_id`, `name`, `present_address`, `pr_post_code`, `permanent_address`, `pa_post_code`, `mobile_number`, `email_address`, `username`, `password`) VALUES
                ('$librarianId', '$name', '$present_address', '$present_address_post_code', '$permanent_address', '$permanent_address_post_code', '$phone', '$email', '$userName', 'librarian')";

                global $conn;
                if ($conn->query($sql)) {
                    outputMessage("Registration Data Sent Successfully!!!", "Wait For the Confirmation!", "success");
                } else {
                    outputMessage("Invalid Registration Data!!!", "Please Try again", "danger");
                }
            }
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5 register rounded-border-white-background">
                <table class="table table-bordered table-striped">
                    <th>
                        <h2 class="text-center fw-bold">Add Librarian</h2>
                    </th>
                    <tr>
                        <td>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Librarian Name<sup>*</sup></label>
                                    <input type="text" placeholder="Type your name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="present address">Present Address <sup>*</sup></label>
                                    <input type="text" placeholder="Type present address" name="present_address" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="post code">Post Code <sup>*</sup></label>
                                    <input type="number" placeholder="Type post code of present address" name="present_address_post_code" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="permanent address">Permanent Address <sup>*</sup></label>
                                    <input type="text" placeholder="Type permanent address" name="permanent_address" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="post code">Post Code <sup>*</sup></label>
                                    <input type="number" placeholder="Type post code of permanent address" name="permanent_address_post_code" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="phone">Phone <sup>*</sup></label>
                                    <input type="text" placeholder="Type phone number" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="email">Email <sup>*</sup></label>
                                    <input type="email" placeholder="Type email address" name="email" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="user name">Username <sup>*</sup></label>
                                    <input type="text" placeholder="Type username" name="userName" class="form-control" required>
                                </div>

                                <input class="btn bg-dark-blue text-light fw-bold" type="submit" value="Add Librarian">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

