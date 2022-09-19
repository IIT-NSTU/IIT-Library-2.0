<?php
    require_once('inc/header.php');
    require_once('inc/config.php');
    require_once('inc/functions.php');
?>

<!-- Body Starts -->
    <body style="background-image: url('res/background2.jpg')">
        <?php
            require_once ('inc/navbar.php');
        ?>

        <?php
            $limit = 8;

            if (isset($_GET["page"])) {
                $page  = $_GET["page"];
            }
            else{
                $page = 1;
            }
            $startFrom = ($page - 1) * $limit;
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

            <div class="container mb-5">
                <div class="row" id="showBooks">
                    <?php
                        if (isset($_POST['userInput'])) {
                            $searchItem = $_POST['userInput'];
                            $sql = "SELECT * FROM book WHERE book.title LIKE '%{$searchItem}%' LIMIT $startFrom, $limit";
                        } else {
                            $sql = "SELECT * FROM `book` LIMIT $startFrom, $limit";
                        }

                        global $conn;
                        $result = $conn->query($sql);

                        while($row = $result->fetch_assoc()) {
                            echo
                                "<div class='col-lg-3 col-md-6 col-sm-10 mt-5'>
                                    <div class='card card-border text-center' style='height: 100%;'>
                                        <div class='card-header' >
                                            <a href='bookInfo.php?isbn={$row['isbn']}'>
                                                <img src='assets/cover/{$row['image_field']}' alt='Book Picture' class='img-fluid'>
                                            </a>
                                        </div>
                                        <div class='card-body'>
                                            <h5>
                                                {$row['title']}
                                            </h5>
                                        </div>
                                        <div class='card-footer bg-dark-blue'>
                                            <a href='bookInfo.php?isbn={$row['isbn']}' class='nav-link'>More Details</a>
                                        </div>
                                    </div>
                                </div>";
                        }
                    ?>
                </div>
            </div>

            <?php
                if (isset($_POST['userInput'])) {
                    $searchItem = $_POST['userInput'];
                    $sql = "SELECT isbn FROM book WHERE book.title LIKE '%{$searchItem}%'";
                } else {
                    $sql = "SELECT isbn FROM `book`";
                }

                $result = $conn->query($sql);
                $total_records = $result->num_rows;
                $total_pages = ceil($total_records / $limit);

                echo "<ul class='mb-2 justify-content-center pagination bg-light'>";
                    if($page > 1) {
                        echo '<li class="page-item">
                                <a class="page-link" href="index.php?page='.($page - 1).'">Previous</a> 
                            </li>';
                    }

                    for($i = 1; $i <= $total_pages; $i++) {
                        if($i == $page){
                            $active = "active";
                        }
                        else{
                            $active = "";
                        }
                        echo '<li class="page-item '.$active.' ">
                            <a class="page-link" href="index.php?page='.$i.'">'.$i.'</a> 
                          </li>';
                    }

                    if ($total_pages > $page) {
                        echo '<li class="page-item '.$active.' ">
                            <a class="page-link" href="index.php?page='.($page + 1).'">Next</a> 
                        </li>';
                    }
                echo "</ul>";
            ?>
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

