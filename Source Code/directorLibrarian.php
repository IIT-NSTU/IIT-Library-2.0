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
            require_once('inc/directorNavbar.php');
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-striped">
                    <th>
                        <h2 class="text-center fw-bold">Add Librarian</h2>
                    </th>
                    <tr>
                        <td>
                            <form action="" id="" method="POST">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Librarian Name<sup>*</sup></label>
                                    <input type="text" placeholder="Type your name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="father's name">Librarian Father's Name </label>
                                    <input type="text" placeholder="Type your father's name" name="name" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="mother's name">Librarian Mother's Name </label>
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

