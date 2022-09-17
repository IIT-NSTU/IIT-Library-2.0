<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once('inc/functions.php');
?>

<?php
    if(!isset($_SESSION['user_id'])) {
        header("location: index.php");
    }
?>

<!-- Body Starts -->
<body style="background-image: url('res/background3.jpg')">
        <?php
            require_once('inc/userNavbar.php');
        ?>

        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $requestID = $userID = $title = $author = $edition = $publisher = $source = $coverPage = $isbn = "";

                if (isset($_POST['title'])) {
                    $title = $_POST['title'];
                }

                if (isset($_POST['author'])) {
                    $author = $_POST['author'];
                }

                if (isset($_POST['edition'])) {
                    $edition = $_POST['edition'];
                }

                if (isset($_POST['publisher'])) {
                    $publisher = $_POST['publisher'];
                }

                if (isset($_POST['source'])) {
                    $source = $_POST['source'];
                }

                if (isset($_POST['coverPage'])) {
                    $coverPage = $_POST['coverPage'];
                }

                if (isset($_POST['isbn'])) {
                    $isbn = $_POST['isbn'];
                }

                $requestID = "R".rand(10000000000,20000000000);
                $userID = $_SESSION['user_id'];

                global $conn;
                $sql = "INSERT INTO `requested_books` (`request_id`, `user_id`, `title`, `author`, `edition`, `publisher`, `source`, `image_field`, `isbn`) VALUES
                        ('$requestID', '$userID', '$title', '$author', $edition, '$publisher', '$source', '$coverPage', '$isbn');";

                if ($conn->query($sql)) {
                    outputMessage("Book Request Sent Successfully!!!", "Wait For the Confirmation!", "success");
                } else {
                    outputMessage("Invalid Registration Data!!!", "Please Try again", "danger");
                }
            }
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5 register rounded-border-white-background">
                <table class="table table-bordered table-striped">
                    <th>
                        <h2 class="text-center fw-bold">New Book Request</h2>
                    </th>
                    <tr>
                        <td>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
                                    <label class="form-label" for="book publisher">Book Publisher</label>
                                    <input type="text" placeholder="Type publisher of the book" class="form-control" name="publisher">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="book source">Book Source</label>
                                    <input type="text" placeholder="Type from where the book is bought" class="form-control" name="source">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="book cover page">Book Cover Page</label>
                                    <input type="file" placeholder="Insert Image" class="form-control" name="coverPage">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="isbn">ISBN</label>
                                    <input type="number" placeholder="Type International Standard Book Number" class="form-control" name="isbn">
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

