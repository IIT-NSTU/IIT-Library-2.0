<?php
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once ('inc/functions.php');
?>

<!-- Body Starts -->
<body style="background-image: url('res/background3.jpg')">

<?php
    require_once('inc/navbar.php');
?>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $userId = $name = $father_name = $mother_name = $date_of_birth = $present_address = $present_address_post_code = $permanent_address = $permanent_address_post_code = $phone = $email = $roll = $pin = $session = $designation = $userName = $password = $confirmPassword = "";

            if (isset($_POST['name'])) {
                $name = $_POST['name'];
            }

            if (isset($_POST['father_name'])) {
                $father_name = $_POST['father_name'];
            }

            if (isset($_POST['mother_name'])) {
                $mother_name = $_POST['mother_name'];
            }

            if (isset($_POST['date_of_birth'])) {
                $date_of_birth = $_POST['date_of_birth'];
            }

            if (isset($_POST['present_address'])) {
                $present_address = $_POST['present_address'];
            }

            if (isset($_POST['present_address_post_code'])) {
                $present_address_post_code = $_POST['present_address_post_code'];
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

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            }

            if (isset($_POST['roll'])) {
                $roll = $_POST['roll'];
                $userId = "S".rand(10000000000,20000000000);
            }

            if (isset($_POST['teacher_pin'])) {
                $pin = $_POST['teacher_pin'];
                $userId = "T".rand(30000000000,40000000000);
            }

            if (isset($_POST['officer_pin'])) {
                $pin = $_POST['officer_pin'];
                $userId = "O".rand(50000000000,60000000000);
            }

            if (isset($_POST['staff_pin'])) {
                $pin = $_POST['staff_pin'];
                $userId = "F".rand(70000000000,80000000000);
            }

            if (isset($_POST['session'])) {
                $session = $_POST['session'];
            }

            if (isset($_POST['teacher_designation'])) {
                $designation = $_POST['teacher_designation'];
            }

            if (isset($_POST['officer_designation'])) {
                $designation = $_POST['officer_designation'];
            }

            if (isset($_POST['staff_designation'])) {
                $designation = $_POST['staff_designation'];
            }

            if (isset($_POST['userName'])) {
                $userName = $_POST['userName'];
            }

            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }

            if (isset($_POST['confirm_password'])) {
                $confirmPassword = $_POST['confirm_password'];
            }

            if ($password != $confirmPassword) {
                outputMessage("Password Doest Not Match!!!", "Please Enter Same Password", "danger");
            }

            $status = "new";

            global $conn;
            $sql = "INSERT INTO `user` (`user_id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `present_address`, `pr_post_code`, `permanent_address`, `pa_post_code`, `mobile_number`, `email_address`, `roll_number`, `session`, `designation`, `pin`, `username`, `password`, `status`) VALUES
            ('$userId', '$name', '$father_name', '$mother_name', '$date_of_birth', '$present_address', '$present_address_post_code', '$permanent_address', '$permanent_address_post_code', '$phone', '$email', '$roll', '$session', '$designation', '$pin', '$userName', '$password', '$status')";

            if ($conn->query($sql)) {
                outputMessage("Registration Data Sent Successfully!!!", "Wait For the Confirmation!", "success");
            } else {
                outputMessage("Invalid Registration Data!!!", "Please Try again", "danger");
            }

        }
    ?>

    <!-- <main> -->
        <div class="container mt-5 mb-5 register rounded-border-white-background">
            <table class="table table-striped">
                <th>
                    <h2 class="text-center fw-bold">Registration</h2>
                </th>
                <tr>
                    <td>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="signup" method="POST" >
                                <div class="container mt-3 mb-3">
                                    <div class="row">
                                        <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                            <button type="button" class="btn bg-dark-blue text-light fw-bold" id="studentButton" onclick="student()">Register as Student</button>
                                        </div>
                                        <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                            <button type="button" class="btn bg-dark-blue text-light fw-bold" id="teacherButton" onclick="teacher()">Register as Teacher</button>
                                        </div>
                                        <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                            <button type="button" class="btn bg-dark-blue text-light fw-bold" id="officerButton" onclick="officer()">Register as Officer</button>
                                        </div>
                                        <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                            <button type="button" class="btn bg-dark-blue text-light fw-bold" id="registerButton" onclick="staff()">Register as Staff</button>
                                        </div>
                                    </div>
                                </div>

                            <div id="commonData">
                                
                            </div>    

                            <div id="otherData">
                                
                            </div>

                            <div id="passwordData">

                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>

            <script>
                function firstPart() {
                    document.getElementById("commonData").innerHTML = ""  +
                        "<div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='name'>Name <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your name' name='name' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='father's name'>Father's Name </label>" +
                                "<input type='text' placeholder='Type your father name' name='father_name' class='form-control'>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='mother's name'>Mother's Name </label>" +
                                "<input type='text' placeholder='Type your mother name' name='mother_name' class='form-control'>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='date_of_birth' >Date Of Birth <sup>*</sup></label>" +
                                "<input id='date_of_birth' type='date' placeholder='Type your date of birth' name='date_of_birth' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='present address'>Present Address <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your present address' name='present_address' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='post code'>Post Code <sup>*</sup></label>" +
                                "<input type='number' placeholder='Type your post code of present address' name='present_address_post_code' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='permanent address'>Permanent Address <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your permanent address' name='permanent_address' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='post code'>Post Code <sup>*</sup></label>" +
                                "<input type='number' placeholder='Type your post code of permanent address' name='permanent_address_post_code' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='phone'>Phone <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your phone number' name='phone' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='email'>Email <sup>*</sup></label>" +
                                "<input type='email' placeholder='Type your email address' name='email' class='form-control' required>" +
                            "</div>" +
                        "</div>";
                }

                function student() {
                    document.getElementById("studentButton").style.backgroundColor = "blue";
                    document.getElementById("teacherButton").style.backgroundColor = "#002147";
                    document.getElementById("officerButton").style.backgroundColor = "#002147";
                    document.getElementById("registerButton").style.backgroundColor = "#002147";

                    firstPart();
                    document.getElementById("otherData").innerHTML = ""+
                        "<div class='container mt-3 mb-3'>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='roll'>Roll <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your roll number' name='roll' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='session'>Select Session <sup>*</sup></label>" +
                                "<select name='session' class='form-control'>" +
                                    "<option value='2020-21'>2020-21</option>" +
                                    "<option value='2019-20'>2019-20</option>" +
                                    "<option value='2018-19'>2018-19</option>" +
                                    "<option value='2016-17'>2017-18</option>" +
                                "</select>" +
                            " </div>" +
                        "</div>";
                    endPart();
                }

                function teacher() {
                    document.getElementById("studentButton").style.backgroundColor = "#002147";
                    document.getElementById("teacherButton").style.backgroundColor = "blue";
                    document.getElementById("officerButton").style.backgroundColor = "#002147";
                    document.getElementById("registerButton").style.backgroundColor = "#002147";

                    firstPart();
                    document.getElementById("otherData").innerHTML = ""+
                        "<div class='container mt-3 mb-3'>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='nid'>PIN <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your Personal Identification Number (PIN)' name='teacher_pin' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='rank'>Select Degisnation<sup>*</sup></label>" +
                                "<select name='teacher_designation' class='form-control'>" +
                                    "<option value='Lecturer'>Lecturer</option>" +
                                    "<option value='Assistant Professor'>Assistant Professor</option>" +
                                    "<option value='Associate Professor'>Associate Professor</option>" +
                                    "<option value='Professor'>Professor</option>" +
                                "</select>" +
                            " </div>" +
                        "</div>";
                    endPart();
                }

                function officer() {
                    document.getElementById("studentButton").style.backgroundColor = "#002147";
                    document.getElementById("teacherButton").style.backgroundColor = "#002147";
                    document.getElementById("officerButton").style.backgroundColor = "blue";
                    document.getElementById("registerButton").style.backgroundColor = "#002147";

                    firstPart();
                    document.getElementById("otherData").innerHTML = ""+
                        "<div class='container mt-3 mb-3'>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='nid'>PIN <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your Personal Identification Number (PIN)' name='officer_pin' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='rank'>Select Degisnation<sup>*</sup></label>" +
                                "<select name='officer_designation' class='form-control'>" +
                                    "<option value='Section Officer'>Section Officer</option>" +
                                "</select>" +
                            "</div>" +
                        "</div>";
                    endPart();
                }

                function staff() {
                    document.getElementById("studentButton").style.backgroundColor = "#002147";
                    document.getElementById("teacherButton").style.backgroundColor = "#002147";
                    document.getElementById("officerButton").style.backgroundColor = "#002147";
                    document.getElementById("registerButton").style.backgroundColor = "blue";

                    firstPart();
                    document.getElementById("otherData").innerHTML = ""+
                        "<div class='container mt-3 mb-3'>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='nid'>PIN <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your Personal Identification Number (PIN)' name='staff_pin' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='rank'>Select Degisnation<sup>*</sup></label>" +
                                "<select name='staff_designation' class='form-control'>" +
                                    "<option value='Office Assistant'>Office Assistant</option>" +
                                    "<option value='Lab Assistant'>Lab Assistant</option>" +
                                "</select>" +
                            "</div>" +
                        "</div>";
                    endPart();
                }

                function endPart() {
                    document.getElementById("passwordData").innerHTML = ""+
                        "<div class='container mt-3 mb-3'>"+
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='password'>Username<sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your username' name='userName' class='form-control' required>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='password'>Password <sup>*</sup></label>" +
                                "<input type='password' placeholder='Password' name='password' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='confirm_password'>Confirm password: <sup>*</sup></label>" +
                                "<input type='password' placeholder='Re-type Password' name='confirm_password' class='form-control' required>" +
                            "</div>" +
                            "<div>" +
                                "<input type='submit' class='btn bg-dark-blue text-light fw-bold' value='Send Registration Request'>" +
                            "</div>" +
                        "</div>";
                }

            </script>
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



