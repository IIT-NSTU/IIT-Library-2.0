<?php
    require_once('inc/header.php');
?>

<!-- Body Starts -->

<body>

<?php
    require_once('inc/navbar.php');
?>

    <!-- <main> -->
        <div class="container mt-5 mb-5">
            <table class="table table-bordered table-striped">
                <th>
                    <h2 class="text-center fw-bold">Registration</h2>
                </th>
                <tr>
                    <td>
                        <form action="" id="signup" method="POST">
                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name <sup>*</sup></label>
                                <input type="text" placeholder="Type your name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="father's name">Father's Name </label>
                                <input type="text" placeholder="Type your father's name" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="mother's name">Mother's Name </label>
                                <input type="text" placeholder="Type your mother's name" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="date of birth">Date Of Birth <sup>*</sup></label>
                                <input type="date" placeholder="Type your date of birth" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="present address">Present Address <sup>*</sup></label>
                                <input type="text" placeholder="Type your present address" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="post code">Post Code <sup>*</sup></label>
                                <input type="number" placeholder="Type your post code of present address" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="permanent address">Permanent Address <sup>*</sup></label>
                                <input type="text" placeholder="Type your permanent address" name="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="post code">Post Code <sup>*</sup></label>
                                <input type="number" placeholder="Type your post code of permanent address" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="phone">Phone <sup>*</sup></label>
                                <input type="text" placeholder="Type your phone number" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="email">Email <sup>*</sup></label>
                                <input type="email" placeholder="Type your email address" name="email" class="form-control" required>
                            </div>

                        <div class="container mt-3 mb-3">
                            <div class="row">
                                <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                    <button type="button" class="btn bg-dark-blue text-light fw-bold" name="studentButton" id="studentButton" onclick="student()">Register as Student</button>
                                </div>
                                <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                    <button type="button" class="btn bg-dark-blue text-light fw-bold" name="teacherButton" onclick="teacher()">Register as Teacher</button>
                                </div>
                                <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                    <button type="button" class="btn bg-dark-blue text-light fw-bold" name="officerButton" onclick="officer()">Register as Officer</button>
                                </div>
                                <div class="card col-lg-3 col-md-6 col-sm-12 mt-lg-1 mt-md-3 mt-sm-2">
                                    <button type="button" class="btn bg-dark-blue text-light fw-bold" name="staffButton" onclick="officer()">Register as Staff</button>
                                </div>
                            </div>
                        </div>

                        <div id="otherData"></div>

                        </form>
                    </td>
                </tr>
            </table>
        </div>

            <script>
                function student() {
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
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='password'>Password <sup>*</sup></label>" +
                                "<input type='password' placeholder='Password' name='password' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='confirm_password'>Confirm password: <sup>*</sup></label>" +
                                "<input type='password' placeholder='Re-type Password' name='confirm_password' class='form-control' required>" +
                            " </div>" +
                            "<div>" +
                                "<input class='btn bg-dark-blue text-light fw-bold' type='submit' name='student' value='Send Registration Request'>" +
                            "</div>" +
                        "</div>";
                }

                function teacher() {
                    document.getElementById("otherData").innerHTML = ""+
                        "<div class='container mt-3 mb-3'>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='nid'>NID <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your NID number' name='nid' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='rank'>Select Rank<sup>*</sup></label>" +
                                "<select name='session' class='form-control'>" +
                                    "<option value='lecturar'>Lecturar</option>" +
                                    "<option value='assistantprofessor'>Assistant Professor</option>" +
                                    "<option value='associateprofessor'>Associate Professor</option>" +
                                    "<option value='professor'>Professor</option>" +
                                "</select>" +
                            " </div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='password'>Password <sup>*</sup></label>" +
                                "<input type='password' placeholder='Password' name='password' class='form-control' required>" +
                                "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='confirm_password'>Confirm password: <sup>*</sup></label>" +
                                "<input type='password' placeholder='Re-type Password' name='confirm_password' class='form-control' required>" +
                            " </div>" +
                            "<div>" +
                                "<input class='btn bg-dark-blue text-light fw-bold' type='submit' value='Send Registration Request'>" +
                            "</div>" +
                        "</div>";
                }

                function officer() {
                    document.getElementById("otherData").innerHTML = ""+
                        "<div class='container mt-3 mb-3'>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='nid'>NID <sup>*</sup></label>" +
                                "<input type='text' placeholder='Type your NID number' name='nid' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='rank'>Select Rank<sup>*</sup></label>" +
                                "<select name='session' class='form-control'>" +
                                    "<option value='officeAssistant'>Office Assistant</option>" +
                                    "<option value='labAssistant'>Lab Assistant</option>" +
                                "</select>" +
                            "</div>" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='password'>Password <sup>*</sup></label>" +
                                "<input type='password' placeholder='Password' name='password' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='confirm_password'>Confirm password: <sup>*</sup></label>" +
                                "<input type='password' placeholder='Re-type Password' name='confirm_password' class='form-control' required>" +
                            " </div>" +
                            "<div>" +
                                "<input type='submit' class='btn bg-dark-blue text-light fw-bold' value='Send Registration Request'>" +
                            "</div>" +
                        "</div>";
                }

                function endingPart() {
                    document.getElementById("otherData").innerHTML = "" +
                            "<div class='form-group mb-3'>" +
                                "<label class='form-label' for='password'>Ending Password <sup>*</sup></label>" +
                                "<input type='password' placeholder='Password' name='password' class='form-control' required>" +
                            "</div>" +
                            "<div  class='form-group mb-3'>" +
                                "<label class='form-label' for='confirm_password'>Confirm password: <sup>*</sup></label>" +
                                "<input type='password' placeholder='Re-type Password' name='confirm_password' class='form-control' required>" +
                            " </div>" +
                            "<div>" +
                                "<input type='submit' class='btn bg-dark-blue text-light fw-bold' value='Send Registration Request'>" +
                            "</div>" +
                        "</div>";
                }

            </script>
</body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>


