<?php
    require_once('inc/header.php');
?>

<!-- Body Starts -->
    <body>
        <?php
            require_once('inc/userNavbar.php');
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-striped">
                    <th>
                        <h2 class="text-center fw-bold">New Book Request</h2>
                    </th>
                    <tr>
                        <td>
                            <form action="" id="" method="POST">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="book title">Book Title<sup>*</sup></label>
                                    <input type="text" placeholder="Type title of the book" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="author name">Author Name<sup>*</sup></label>
                                    <input type="text" placeholder="Type author name" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="book edition">Book Edition<sup>*</sup></label>
                                    <input type="number" placeholder="Type edition of the book"  class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="book publisher">Book Publisher</label>
                                    <input type="text" placeholder="Type publisher of the book" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="book source">Book Source</label>
                                    <input type="text" placeholder="Type from where the book is bought" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="book cover page">Book Cover Page</label>
                                    <input type="file" placeholder="Insert Image" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="isbn">ISBN</label>
                                    <input type="number" placeholder="Type International Standard Book Number" class="form-control">
                                </div>
                                <input class='btn bg-dark-blue text-light fw-bold' type='submit' value='Send New Book Request'>
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

