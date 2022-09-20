<!-- Navigation Bar Starts -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark-blue">
        <div class="container">
            <a href="userHome.php">
                <img src="res/favicon.png"" width="50px" alt="Book Icon">
            </a>
            <span class="navbar-brand mr-2">
                User
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="res/menu.png" width="50px" alt="Menu Icon">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav" style="margin-left: auto;">
                    <li class="nav-item"><a class="nav-link" href="userHome.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="userBorrowBooks.php">Borrow Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="userFine.php">Fine</a></li>
                    <li class="nav-item"><a class="nav-link" href="userNewBookRequest.php">New Book Request</a></li>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown">
                                    Watch
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="userBookings.php">Bookings</a></li>
                                    <li><a class="dropdown-item" href="userWatchNewBookRequests.php">New Book Requests</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item"><a class="nav-link" href="userProfile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navigation Bar Ends -->
