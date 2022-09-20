<!-- Navigation Bar Starts -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark-blue">
        <div class="container">
            <a href="librarianHome.php">
                <img src="res/favicon.png"" width="50px" alt="Book Icon">
            </a>
            <span class="navbar-brand mr-2">
                Librarian
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="res/menu.png" width="50px" alt="Menu Icon">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li class="nav-item"><a class="nav-link" href="librarianHome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="librarianAddNewBook.php">Add New Book</a></li>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                                    Watch
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="librarianNewBookRequests.php">New Book Requests</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="librarianUsers.php">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="librarianFine.php">Fine</a></li>
                    <li class="nav-item"><a class="nav-link" href="librarianProfile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navigation Bar Ends -->

<!--Check Borrow Receipt Modal Starts-->
    <div class="modal fade" id="checkBorrowReceiptModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container mb-3 mt-3">
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label class="form-label">Borrow ID</label>
                            <input type="text" id="borrowID" class="form-control"  placeholder="Type your borrow ID" required>
                        </div>

                        <div id="changeableButton">
                            <button class="btn bg-dark-blue text-light" type="button" onclick="checkStatus()">Check Status</button>
                        </div>
                        <script>
                            function checkStatus() {
                                let id = document.getElementById("borrowID").value;
                                console.log(id);
                                if (id == 100) {
                                    document.getElementById("changeableButton").innerHTML = "<input class='btn bg-dark-blue text-light' type='submit' value='Give Book'>";
                                } else if (id == 200){
                                    document.getElementById("changeableButton").innerHTML = "<input class='btn bg-dark-blue text-light' type='submit' value='Receive Book'>";
                                }
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Check Borrow Receipt Modal Ends-->