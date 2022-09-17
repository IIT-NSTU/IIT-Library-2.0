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
            require_once('inc/userNavbar.php');
        ?>

        <!-- <main> -->

        <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

