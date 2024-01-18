<header class="header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index.php" class="navbar-brand logo">
                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                </a>
                <a href="index.php" class="navbar-brand logo-small">
                    <img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.php" class="menu-logo">
                        <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="listing-grid.php">Rent A Car</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
            <?php if(!isset($_SESSION['driver_id'])) {?>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a class="nav-link header-login" href="login.php"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-reg" href="register.php"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item dropdown">
                        <label class="welcome-user cursor-pointer" for="dropdown-toggle">
                            <span><i class="fa-solid fa-circle-user fa-fw align-middle f-28"></i></span>Welcome <?php echo $_SESSION['fullname']; ?> <i class="fas fa-angle-down align-middle ml-10"></i>
                        </label>
                        <input type="checkbox" id="dropdown-toggle" class="toggle-input">
                        <ul class="submenu">
                            <li><a href="my-account.php">My Profile</a></li>
                            <li><a href="booking.php">My Bookings</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            <?php } ?>
        </nav>
    </div>
</header>
