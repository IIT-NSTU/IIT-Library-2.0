<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/functions.php');
?>

<?php
    if(!isset($_SESSION['librarian_id'])) {
        header("location: index.php");
    }
?>

<!-- Body Starts -->
    <body>

        <?php
            require_once('inc/librarianNavbar.php');
        ?>

    <!-- <main> -->

    <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

