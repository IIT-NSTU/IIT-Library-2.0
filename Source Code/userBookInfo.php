<?php
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

            echo "<div class='container mt-5 mb-5'> 
                                <div class='row justify-content-center rounded-border-white-background'> 
                                    <div class='col-md-5'> 
                                        <div class='d-flex flex-column align-items-center text-center p-3 py-5'>
                                            <img class='mt-5' src='assets/cover/{$row['image_field']}'>
                                            <span class='form-label mt-5'>Title : {$row['title']}</span>
                                            <span class='form-label'>Author : {$row['author']}</span>
                                        </div>
                                    </div>
                                    <div class='col-md-7'>
                                        <div class='p-3 py-5'>
                                            <div class='d-flex justify-content-center mb-5'>
                                                <h4 class='form-label'>Other Information</h4>
                                            </div>
                                            <div class='row mt-2'>
                                                <div class='col-md-6'>
                                                    <label class='form-label'>Edition</label>
                                                    <input type='text' class='form-control' placeholder='{$row['edition']} $editionText' disabled>
                                                </div>
                                                <div class='col-md-6'>
                                                    <label class='form-label'>No of Books</label>
                                                    <input type='text' class='form-control' placeholder='{$row['no_of_books']}' disabled>
                                                </div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Date of Publication</label>
                                                    <input type='text' class='form-control' placeholder='{$row['date_of_publication']}' disabled>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Publisher</label>
                                                    <input type='text' class='form-control' placeholder='{$row['publisher']}' disabled>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Number of Pages</label>
                                                    <input type='text' class='form-control' placeholder='{$row['number_of_pages']} Pages' disabled>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Price</label>
                                                    <input type='text' class='form-control' placeholder='{$row['price']} Tk' disabled>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Source</label>
                                                    <input type='text' class='form-control' placeholder='{$row['source']}' disabled>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>ISBN</label>
                                                    <input type='text' class='form-control' placeholder='{$row['isbn']}' disabled>
                                                </div>
                                                <div class='col-md-12 mt-3'>
                                                    <label class='form-label'>Electronic Copy</label>";

                                                if ($electronicCopy == "Available") {
                                                    echo "<button type='button' class='form-control btn-success text-light fw-bold' onclick='openFile()'>Available</button>";
                                                } else {
                                                    echo "<input type='button' class='form-control btn-danger text-light fw-bold' id='$electronicCopy' value='Not Available'>";
                                                }
                                                echo"</div>
                                            </div>                
                                        </div>
                                    </div>
                                </div>
                            </div>";
        ?>

    <script>
        function openFile() {
            window.open("assets/pdf/<?php echo $row['electronic_copy_path'];?>");
        }
    </script>
    <!-- </main> -->
</body>
<!-- Body Ends -->

<?php
    require_once ('inc/footer.php');
?>

