<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once('inc/functions.php');
?>

<?php
    if(!isset($_SESSION['librarian_id'])) {
        header("location: index.php");
    }
?>

    <!-- Body Starts -->

    <body style="background-image: url('res/background3.jpg')">

    <?php
        require_once('inc/librarianNavbar.php');
    ?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $title = $author = $edition = $date = $publisher = $numberOfPage = $price = $source = $coverPage = $isbn = $electronicCopy = "";

            if (isset($_POST['title'])) {
                $title = $_POST['title'];
            }

            if (isset($_POST['author'])) {
                $author = $_POST['author'];
            }

            if (isset($_POST['edition'])) {
                $edition = $_POST['edition'];
            }

            if (isset($_POST['date_of_publication'])) {
                $date = $_POST['date_of_publication'];
            }

            if (isset($_POST['publisher'])) {
                $publisher = $_POST['publisher'];
            }

            if (isset($_POST['number_of_pages'])) {
                $numberOfPage = $_POST['number_of_pages'];
            }

            if (isset($_POST['price'])) {
                $price = $_POST['price'];
            }

            if (isset($_POST['source'])) {
                $source = $_POST['source'];
            }

            if (isset($_POST['isbn'])) {
                $isbn = $_POST['isbn'];
            }

            if (isset($_POST['number_of_books'])) {
                $numOfBooks = $_POST['number_of_books'];
            }

            if (isset($_POST['add_new_book'])) {
                extract($_POST);

                $image = file_upload($_FILES, 'cover_page', $isbn, 'cover');
                $pdf = file_upload($_FILES, 'electronic_copy', $isbn, 'pdf');

                global $conn;
                $sql = "INSERT INTO `book` (`isbn`, `title`, `author`, `edition`, `date_of_publication`, `publisher`, `number_of_pages`, `price`, `source`, `image_field`, `electronic_copy_path`, `no_of_books`) 
                            VALUES ('$isbn', '$title', '$author', $edition, '$date', '$publisher', $numberOfPage, $price, '$source', '$image', '$pdf', $numOfBooks);";

                try {
                    $conn->query($sql);
                    outputMessage("Book Added Successfully!!!", "", "success");
                } catch (Exception $e) {
                    outputMessage("Something Went Wrong!!!", "Please Try Again!", "danger");
                }

                for ($i = 0; $i < $numOfBooks; $i++) {
                    $accession = "A".rand(10000000000,20000000000);
                    $conn->query("INSERT INTO `accession_isbn` (`accession`, `isbn`, `borrowed`) VALUES ('$accession', '$isbn', 'no')");
                }
            }
        }
    ?>

    <!-- <main> -->
        <div class="container mt-5 mb-5 register rounded-border-white-background">
            <table class="table table-bordered table-striped">
                <th>
                    <h2 class="text-center fw-bold">Add New Book</h2>
                </th>
                <tr>
                    <td>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label class="form-label" for="book title">Book Title<sup>*</sup></label>
                                <input type="text" placeholder="Type title of the book" class="form-control" name="title" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="author name">Author Name<sup>*</sup></label>
                                <input type="text" placeholder="Type author name" class="form-control" name="author" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="book edition">Book Edition<sup>*</sup></label>
                                <input type="number" placeholder="Type edition of the book"  class="form-control" name="edition" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="date of publication">Date of Publication<sup>*</sup></label>
                                <input id="datePickerId" type="date" placeholder="dd-mm-yyyy" class="date form-control" name="date_of_publication">
                                <script>
                                    document.getElementById("datePickerId").max = new Date().toISOString().split("T")[0];
                                </script>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="book publisher">Book Publisher<sup>*</sup></label>
                                <input type="text" placeholder="Type publisher of the book" class="form-control" name="publisher" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="number of pages">Number of Pages<sup>*</sup></label>
                                <input type="number" placeholder="Type number of pages of the book" class="form-control" name="number_of_pages" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="book price">Book Price<sup>*</sup></label>
                                <input type="number" placeholder="Type price of the book" class="form-control" name="price" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="book source">Book Source<sup>*</sup></label>
                                <input type="text" placeholder="Type from where the book is bought" class="form-control" name="source" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="book cover page">Book Cover Page</label>
                                <input type="file" placeholder="Insert Image" class="form-control" id="cover_page" name="cover_page">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="isbn">ISBN<sup>*</sup></label>
                                <input type="number" placeholder="Type International Standard Book Number" class="form-control" name="isbn" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="electronic copy">Electronic Copy</label>
                                <input type="file" placeholder="Insert pdf" class="form-control" id="electronic_copy" name="electronic_copy" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="number of books">Number of Books<sup>*</sup></label>
                                <input type="number" placeholder="Type number of books of same information" class="form-control" name="number_of_books" required>
                                <span class="form-text">N number of books will be added with unique accession number</span>
                            </div>

                            <input class='btn bg-dark-blue text-light fw-bold' type='submit' value='Add New Book' name="add_new_book">
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