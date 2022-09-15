<!-- Navigation Bar Starts -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark-blue">
        <div class="container">
            <a href="index.php">
                <img src="res/favicon.png" width="50px" alt="Book Icon">
            </a>
            <span class="navbar-brand mr-2">
                IIT LIBRARY
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="res/menu.png" width="50px" alt="Menu Icon">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="margin-left: auto;">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Librarian</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Director</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
            </div>

        </div>
    </nav>
<!-- Navigation Bar Ends -->


<!--Login Modal Starts-->
    <div class="modal fade" id="loginModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container mb-3 mt-3">
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Type your username" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Type your password" required>
                        </div>
                        <div>
                            <input class="btn bg-dark-blue text-light" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--Login Modal Ends-->