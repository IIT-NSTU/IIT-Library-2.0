<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/functions.php');
?>

<!-- Body Starts -->
    <body>
        <?php
            require_once('inc/userNavbar.php');
        ?>

        <?php
            if ($_SESSION['loggedIn'] == 1) {
                outputMessage("Successfully Logged In!!!", "Welcome to IIT Library");
                $_SESSION['loggedIn'] = 0;
            }
        ?>

        <!-- <main> -->
            <div class="mt-5">
                <div class="d-flex justify-content-center">
                    <div class="search">
                        <input class="search-input form-label" type="text" name="" placeholder="Search Book">
                        <img src="res/search.png" alt="Search Icon" width="50px" ">
                    </div>
                </div>
            </div>

            <div id="bookList">

            </div>
        <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

