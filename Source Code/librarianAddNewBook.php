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
        <div class="container mt-5 mb-5 ">
            <table class="table table-bordered table-striped">
                <th>
                    <h2 class="text-center fw-bold">Add New Book</h2>
                </th>
                <tr>
                    <td>
                        <form action="" id="" method="POST">
                            <div class="form-group mb-3">
                                <label class="form-label" for="accession number">Accession Number<sup>*</sup></label>
                                <input type="number" placeholder="Type accession number of the book" class="form-control" required>
                                <span class="form-text">Must be 6 digits</span>
                            </div>
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
                                <label class="form-label" for="date of publication">Date of Publication<sup>*</sup></label>
                                <input id="datePickerId" type="date" placeholder="dd-mm-yyyy" class="date form-control">
                                <script>
                                    document.getElementById("datePickerId").max = new Date().toISOString().split("T")[0];
                                </script>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="book publisher">Book Publisher<sup>*</sup></label>
                                <input type="text" placeholder="Type publisher of the book" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="number of pages">Number of Pages<sup>*</sup></label>
                                <input type="number" placeholder="Type number of pages of the book" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="book price">Book Price<sup>*</sup></label>
                                <input type="number" placeholder="Type price of the book" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="book source">Book Source<sup>*</sup></label>
                                <input type="text" placeholder="Type from where the book is bought" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="book cover page">Book Cover Page</label>
                                <input type="file" placeholder="Insert Image" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="isbn">ISBN<sup>*</sup></label>
                                <input type="number" placeholder="Type International Standard Book Number" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="electronic copy">Electronic Copy</label>
                                <input type="text" placeholder="Type path of the electronic copy" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="number of books">Number of Books<sup>*</sup></label>
                                <input type="number" placeholder="Type number of books of same information" class="form-control" required>
                                <span class="form-text">N number of books will be added with unique accession number</span>
                            </div>

                            <input class='btn bg-dark-blue text-light fw-bold' type='submit' value='Add New Book'>
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