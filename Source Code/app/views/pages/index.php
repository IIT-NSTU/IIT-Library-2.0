<?php
    require_once('app/views/inc/header.php');
?>

<!-- Body Starts -->
    <body>
        <?php
            require_once ('app/views/inc/navbar.php');
        ?>

        <!-- <main> -->
            <div class="mt-5">
                <div class="d-flex justify-content-center">
                    <div class="search">
                        <input class="search-input form-label" type="text" name="" placeholder="Looking for your desired book? Search Now!!!">
                        <img src="/public/res/search.png" alt="Search Icon" width="50px">
                    </div>
                </div>
            </div>

            <div id="bookList">

            </div>
        <!-- </main> -->
    </body>
    <!-- Body Ends -->

<?php
    require_once ('app/views/inc/footer.php');
?>

