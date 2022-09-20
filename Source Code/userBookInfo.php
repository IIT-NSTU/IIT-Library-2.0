<?php
    session_start();
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once('inc/functions.php');
?>

<!-- Body Starts -->
<body style="background-image: url('res/background2.jpg')">
    <?php
        require_once ('inc/userNavbar.php');
    ?>

    <!-- </main> -->
        <?php
            $isbn = $_GET['isbn'];
            global $conn;
            $sql = "SELECT  * FROM book WHERE book.isbn = '$isbn'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            if ($row['edition'] == 1) {
                $editionText = "st";
            } else if ($row['edition'] == 2) {
                $editionText = "nd";
            } else if ($row['edition'] == 3) {
                $editionText = "rd";
            } else if ($row['edition'] == 4) {
                $editionText = "rth";
            } else {
                $editionText = "th";
            }

            if ($row['electronic_copy_path'] != "") {
                $electronicCopy = "Available";
            } else {
                $electronicCopy = "Not Available";
            }

            ?>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $bookingID = "";

                $bookingID = "B".rand(10000000000,20000000000);
                $date = date("Y-m-d H:i:s", strtotime('+4 hours'));

                $sql2 = "SELECT accession FROM `accession_isbn` WHERE isbn = '$isbn' and borrowed = 'no'";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();

                $sql3 = "INSERT INTO `booking` (`booking_id`, `user_id`, `accession_number`, `date`) VALUES 
                                            ('$bookingID', '{$_SESSION['user_id']}', '{$row2['accession']}', '$date')";

                if ($conn->query($sql3)) {
                    outputMessage("Booking Completed Successfully!!!", "Please Collect The Book Within 72 Hours", "success");
                } else {
                    outputMessage("Invalid Data!!!", "Please Try again", "danger");
                }

                $sql4 = "UPDATE `accession_isbn` SET `borrowed` = 'maybe' WHERE `accession_isbn`.`accession` = '{$row2['accession']}'";
                $conn->query($sql4);
            }
        ?>

            <div class="container mt-5 mb-5">
                <div class="row justify-content-center rounded-border-white-background">
                    <div class="col-md-5">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <img class="mt-5" src="assets/cover/<?php echo $row['image_field']; ?>" style="max-height: 500px; max-width: 350px;">
                            <span class="form-label mt-5">Title : <?php echo $row['title']; ?></span>
                            <span class="form-label">Author : <?php echo $row['author']; ?></span>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class='p-3 py-5'>
                            <div class='d-flex justify-content-center mb-5'>
                                <h4 class='form-label'>Other Information</h4>
                            </div>
                            <div class='row mt-2'>
                                <div class='col-md-6'>
                                    <label class='form-label'>Edition</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['edition'].$editionText; ?>' disabled>
                                </div>
                                <div class='col-md-6'>
                                    <label class='form-label'>No of Books</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['no_of_books']; ?>' disabled>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-12 mt-3'>
                                    <label class='form-label'>Date of Publication</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['date_of_publication']; ?>' disabled>
                                </div>
                                <div class='col-md-12 mt-3'>
                                    <label class='form-label'>Publisher</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['publisher']; ?>' disabled>
                                </div>
                                <div class='col-md-12 mt-3'>
                                    <label class='form-label'>Number of Pages</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['number_of_pages']; ?> Pages' disabled>
                                </div>
                                <div class='col-md-12 mt-3'>
                                    <label class='form-label'>Price</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['price']; ?> Tk' disabled>
                                </div>
                                <div class='col-md-12 mt-3'>
                                    <label class='form-label'>Source</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['source']; ?>' disabled>
                                </div>
                                <div class='col-md-12 mt-3'>
                                    <label class='form-label'>ISBN</label>
                                    <input type='text' class='form-control' placeholder='<?php echo $row['isbn']; ?>' disabled>
                                </div>
                                <div class='col-md-12 mt-3'>
                                    <label class='form-label'>Electronic Copy</label>
                                    <?php
                                        if ($electronicCopy == "Available") {
                                            echo "<button type='button' class='form-control btn-success text-light fw-bold' onclick='openFile()'>Available</button>";
                                        } else {
                                            echo "<input type='button' class='form-control btn-danger text-light fw-bold' id='$electronicCopy' value='Not Available'>";
                                        }
                                        ?>

                                </div>
                                <form action="<?php echo $_SERVER['PHP_SELF'].'?isbn='.$isbn; ?>" method="POST">
                                    <div class='col-md-12 mt-3'>
                                        <button type='submit' class='form-control btn-secondary text-light fw-bold'>Make a Booking for this book</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <script>
        function openFile() {
            window.open("assets/pdf/<?php echo $row['electronic_copy_path'];?>");
        }
    </script>
    <!-- </main> -->
</body>
<!-- Body Ends -->

    <section class="goTopButton">
        <a href="#">
            <img src="res/top.png" alt="top" width="50px">
        </a>
    </section>

<?php
    require_once ('inc/footer.php');
?>

