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
    <body>

        <?php
            require_once('inc/userNavbar.php');
        ?>

        <!-- <main> -->
            <div class="container mt-5 mb-5">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <td colspan="9">
                            <h2 class="text-center fw-bold">My Book Requests</h2>
                        </td>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>Request ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        <th>Source</th>
                        <th>ISBN</th>
                        <th>Status</th>
                    </tr>

                    <?php
                    global $conn;
                    $result = $conn->query("SELECT * FROM `requested_books` WHERE `user_id` = '{$_SESSION['user_id']}'");
                    $count = 1;
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tbody>
                        <tr>
                            <td>
                                <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row['request_id']; ?>
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
                                <?php echo $row['publisher']; ?>
                            </td>
                            <td>
                                <?php echo $row['source']; ?>
                            </td>
                            <td>
                                <?php echo $row['isbn']; ?>
                            </td>
                            <td>
                                <?php echo $row['status']; ?>
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

