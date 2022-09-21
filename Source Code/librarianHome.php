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
    <body>
        <?php
            require_once('inc/librarianNavbar.php');
        ?>

        <?php
            if ($_SESSION['showMessage'] == 1) {
                outputMessage("Successfully Logged In!!!", "Welcome to IIT Library");
                $_SESSION['showMessage'] = 0;
            }
        ?>

        <?php
            global $conn;
            if (isset($_POST['add_book'])) {
                $accession = "A".rand(10000000000,20000000000);
                $conn->query("UPDATE `book` SET `no_of_books` = `no_of_books` + 1 WHERE `book`.`isbn` = '{$_POST['add_book']}'");
                $conn->query("INSERT INTO `accession_isbn` (`accession`, `isbn`, `borrowed`) VALUES ('$accession', '{$_POST['add_book']}', 'no')");
                outputMessage("Book Added Successfully!!!", "", "success");
            }
        ?>

        <?php
            if (isset($_POST['userInput'])) {
                $searchItem = $_POST['userInput'];
                if (strtolower($searchItem) == "all") {
                    $sql = "SELECT * FROM `book`";
                }  else {
                    $sql = "SELECT * FROM `book` WHERE book.title LIKE '%{$searchItem}%' OR book.author LIKE '%{$searchItem}%' OR book.isbn LIKE '%{$searchItem}%'";
                }
            } else if (isset($_SESSION['searchQuery'])) {
                $sql = $_SESSION['searchQuery'];
            } else {
                $sql = "SELECT * FROM `book`";
            }

            $_SESSION['searchQuery'] = $sql;

            $result = $conn->query($sql);
            $count = 1;
        ?>

        <!-- <main> -->
            <div class="mt-5">
                <div class="d-flex justify-content-center">
                    <div class="search">
                        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                            <input class="search-input form-label" type="text" name="userInput" placeholder="Looking for your desired book? Type and Hit Enter!!!" required>
                            <img src="res/search.png" alt="Search Icon" width="50px" onclick="show()">
                        </form>
                    </div>
                </div>
            </div>


            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <td colspan="10">
                            <h2 class="text-center fw-bold">List of Books</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Accession No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Date of Publication</th>
                        <th>Publisher</th>
                        <th>Number of Pages</th>
                        <th>Number of Books</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['isbn']; ?>
                            </td>
                            <td>
                                <?php echo $row['title']; ?>
                            </td>
                            <td>
                                <?php echo $row['author']; ?>
                            </td>
                            <td>
                                <?php echo $row['edition']; ?>
                            </td>
                            <td>
                                <?php echo $row['date_of_publication']; ?>
                            </td>
                            <td>
                                <?php echo $row['publisher']; ?>
                            </td>
                            <td>
                                <?php echo $row['number_of_pages']; ?>
                            </td>
                            <td>
                                <?php echo $row['no_of_books']; ?>
                            </td>
                            <td>
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                    <button class='btn btn-success fw-bold' type='submit' name="add_book" value='<?php echo $row['isbn'];?>'>Add Book</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                </table>
            </div>

        <!-- </main> -->

    </body>
<!-- Body Ends -->

<?php
    require_once('inc/footer.php');
?>

