<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'config/connection.php';
include 'include/session.php';

if (isset($_POST['bookCar'])){

    $serialize['pickup_city'] = $_POST['pickup_city'];
    $serialize['pickup_date'] = $_POST['pickup_date'];
    $serialize['pickup_time'] = $_POST['pickup_time'];
    $serialize['dropoff_city'] = $_POST['dropoff_city'];
    $serialize['dropoff_date'] = $_POST['dropoff_date'];
    $serialize['dropoff_time'] = $_POST['dropoff_time'];

    $bookingDetails = serialize($serialize);

    mt_srand(100);
    $temporary_id = mt_rand();

    $sqlTemporaryBooking = "INSERT INTO  temporary_booking";
    $sqlUser = "INSERT INTO `temporary_booking`(`temporary_id`,`booking_details`) 
        VALUES ('$temporary_id','$bookingDetails')";
    if ($conn->query($sqlUser) == TRUE){
        setcookie('booking_id', $temporary_id, time() + 86400 * 14);
        echo "<script> location.href='car-listing.php'; </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/plugins/aos/aos.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/design.css">
    <link rel="stylesheet" href="common-class.css">
</head>

<body>
    <div class="main-wrapper">
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
                            <li><a href="car-listing.php">Rent A Car</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- <ul class="nav header-navbar-rht">
                        <li class="nav-item dropdown">
                            <label class="welcome-user cursor-pointer" for="dropdown-toggle">
                                <span><i class="fa-solid fa-circle-user fa-fw align-middle f-28"></i></span>Welcome User <i class="fas fa-angle-down align-middle ml-10"></i>
                            </label>
                            <input type="checkbox" id="dropdown-toggle" class="toggle-input">
                            <ul class="submenu">
                                <li><a href="invoice-details.php">My Profile</a></li>
                                <li><a href="invoice-details.php">My Bookings</a></li>
                                <li><a href="invoice-details.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul> -->
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

        <section class="banner-section banner-slider">
            <div class="container">
                <div class="home-banner">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-down">
                            <p class="explore-text"> <span><i class="fa-solid fa-thumbs-up me-2"></i></span>100% Trusted
                                car rental platform in the city</p>
                            <h1>Find Your Best <br>
                                <span>Dream Car for Rental</span>
                            </h1>
                            <p>Explore the Road Ahead with Dreams Rent: Your Gateway to Convenient and Affordable Car Rentals in the Heart of the City.</p>
                            <div class="view-all">
                                <a href="car-listing.php" class="btn btn-view d-inline-flex align-items-center">View
                                    all Cars <span><i class="feather-arrow-right ms-2"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-down">
                            <div class="banner-imgs">
                                <img src="assets/img/car-right.png" class="img-fluid aos" alt="bannerimage">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-search">
            <div class="container">
                <div class="search-box-banner">
                    <form method="post">
                        <ul class="align-items-center mb-30">
                            <li class="column-group-main">
                                <div class="form-group">
                                    <label>Pickup Location</label>
                                    <div class="group-img">
                                        <input type="text" class="form-control" id="pickup_city" name="pickup_city" placeholder="Enter City, Airport, or Address">
                                        <span><i class="feather-map-pin"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li class="column-group-main">
                                <div class="form-group">
                                    <label>Pickup Date & Time</label>
                                </div>
                                <div class="form-group-wrapp">
                                    <div class="form-group date-widget">
                                        <div class="group-img">
                                            <input type="text" class="form-control datetimepicker" name="pickup_date" placeholder="04/11/2023">
                                            <span><i class="feather-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group time-widge">
                                        <div class="group-img">
                                            <input type="text" class="form-control timepicker" name="pickup_time" placeholder="11:00 AM">
                                            <span><i class="feather-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="column-group-main">
                                <div class="form-group">
                                    <label>Drop off Location</label>
                                    <div class="group-img">
                                        <input type="text" class="form-control" id="dropoff_city" name="dropoff_city" placeholder="Enter City, Airport, or Address">
                                        <span><i class="feather-map-pin"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li class="column-group-main">
                                <div class="form-group">
                                    <label>Return Date & Time</label>
                                </div>
                                <div class="form-group-wrapp">
                                    <div class="form-group date-widge">
                                        <div class="group-img">
                                            <input type="text" class="form-control datetimepicker" name="dropoff_date" placeholder="04/11/2023">
                                            <span><i class="feather-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group time-widge">
                                        <div class="group-img">
                                            <input type="text" class="form-control timepicker" name="dropoff_time" placeholder="11:00 AM">
                                            <span><i class="feather-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="form-group">
                            <div class="search-btn text-center">
                                <button class="btn search-button" type="submit" name="bookCar"> <i class="fa fa-search" aria-hidden="true"></i>Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <section class="section services">
            <div class="service-right">
                <img src="assets/img/bg/service-right.svg" class="img-fluid" alt="services right">
            </div>
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>How It Works</h2>
                    <p>Unlock the Road to Easy Car Rentals: Dream, Register, Drive with Dreams Rent</p>
                </div>

                <div class="services-work">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-secondary">
                                    <img class="icon-img bg-secondary" src="assets/img/icons/service-1.png" alt="Choose Car">
                                </div>
                                <div class="services-content">
                                    <h3>1. Find the perfect car</h3>
                                    <p>Browse thousands of cars that owners have shared by entering your location, date and time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-warning">
                                    <img class="icon-img bg-warning" src="assets/img/icons/service-2.png" alt="Choose Location">
                                </div>
                                <div class="services-content">
                                    <h3>2. Pick-Up Location and Date</h3>
                                    <p>Select the date and location that work best for you, then let us to take you on an adventure
                                        full of convenience, freedom, and life-changing moments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-greyish">
                                    <img class="icon-img bg-greyish" src="assets/img/icons/service-3.png" alt="Choose Booking">
                                </div>
                                <div class="services-content">
                                    <h3>3. Book your trip</h3>
                                    <p>Make a reservation online and greet your car owner! Up to 24 hours prior to your trip, you may cancel for free.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-dark">
                                    <img class="icon-img bg-dark" src="assets/img/icons/service-4.png" alt="Hit the road">
                                </div>
                                <div class="services-content">
                                    <h3>4. Hit the road</h3>
                                    <p>Either pick up the car from your car owner or arrange for delivery.
                                        Take out the keys, log in with the website, and go!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section popular-services popular-explore">
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>Explore Most Popular Cars</h2>
                    <p>Discover the Most Popular Cars and Elevate Your Driving Experience</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-12" data-aos="fade-down">
                        <div class="listing-tabs-group">
                            <ul class="nav listing-buttons gap-3" data-bs-tabs="tabs">
                                <li>
                                    <a class="active most-popular" aria-current="true" data-value="all" data-bs-toggle="tab" href="#AllCars">
                                        <span>
                                            <img src="assets/img/icons/all-cars.png" alt="Allcars">
                                        </span>
                                        All
                                    </a>
                                </li>
                                <?php
                                    # Prepare the SELECT Query
                                    $sqlBrand = "SELECT * FROM car_brand";
                                    $result = $conn->query($sqlBrand);
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                    <li>
                                        <a class="most-popular" data-bs-toggle="tab" data-value="<?php echo $row['brand_id']; ?>" data-bs-toggle="tab" href="#AllCars">
                                            <span>
                                                <img src="dashboard/assets/images/brand/<?php echo $row['image']; ?>" alt="<?php echo $row['brand_name']; ?>">
                                            </span>
                                            <?php echo $row['brand_name']; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="AllCars">
                        <div class="row show-car">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section popular-car-type">
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>Most Popular Car Categories</h2>
                </div>

                <div class="row">
                    <div class="popular-slider-group">
                        <div class="owl-carousel popular-cartype-slider owl-theme">
                            <?php
                                # Prepare the SELECT Query
                                $sqlCategory = "SELECT *, (SELECT COUNT(car_id) FROM car_details WHERE car_details.category_id = car_category.category_id GROUP BY category_id) AS car_count FROM car_category";
                                $result = $conn->query($sqlCategory);
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                <div class="listing-owl-item">
                                    <div class="listing-owl-group">
                                        <div class="listing-owl-img">
                                            <img src="assets/img/cars/<?php echo $row['image']; ?>" class="img-fluid" alt="Popular Cartypes">
                                        </div>
                                        <h6><?php echo $row['category_name']; ?></h6>
                                        <p><?php echo isset($row['car_count']) ? $row['car_count'] : '0' ?> Cars</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="view-all text-center" data-aos="fade-down">
                    <a href="car-listing.php" class="btn btn-view d-inline-flex align-items-center">View all Cars
                        <span><i class="feather-arrow-right ms-2"></i></span></a>
                </div>

            </div>
        </section>

        <section class="section facts-number">
            <div class="facts-left">
                <img src="assets/img/bg/facts-left.png" class="img-fluid" alt="facts left">
            </div>
            <div class="facts-right">
                <img src="assets/img/bg/facts-right.png" class="img-fluid" alt="facts right">
            </div>
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2 class="title text-white">Facts By The Numbers</h2>
                </div>
                <?php
                    $sqlCounts = "SELECT COUNT(driver_id) as driver_count, (SELECT COUNT(booking_id) FROM bookings) as booking_count, (SELECT COUNT(car_id) FROM car_details) as car_count, (SELECT COUNT(owner_id) FROM owners) as owner_count FROM drivers";
                    $resultCounts = $conn->query($sqlCounts);
                    $rowCounts = $resultCounts->fetch_assoc();
                ?>
                <div class="counter-group">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/bx-heart.svg" alt>
                                    </div>
                                    <div class="count-content">
                                        <h4><span class=""><?php echo $rowCounts['driver_count']; ?></span></h4>
                                        <p>Happy Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/orders.png" alt>
                                    </div>
                                    <div class="count-content">
                                        <h4><span class=""><?php echo $rowCounts['booking_count']; ?></span></h4>
                                        <p>Completed Bookings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/bx-car.svg" alt>
                                    </div>
                                    <div class="count-content">
                                        <h4><span class=""><?php echo $rowCounts['car_count']; ?></span></h4>
                                        <p>Count of Cars</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/car-owner.png" alt>
                                    </div>
                                    <div class="count-content">
                                        <h4><span class=""><?php echo $rowCounts['owner_count']; ?></span></h4>
                                        <p>Car Owners</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section why-choose popular-explore">
            <div class="choose-left">
                <img src="assets/img/bg/choose-left.png" class="img-fluid" alt="Why Choose Us">
            </div>
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>Why Choose Us</h2>
                </div>

                <div class="why-choose-group">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-black">
                                        <img src="assets/img/icons/why-coose-us.png" alt>
                                    </div>
                                    <div class="choose-content">
                                        <h4>Easy & Fast Booking</h4>
                                        <p>Your shortcut to quick and convenient car rentals in the city.
                                            Book with ease and quickly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-secondary">
                                        <img src="assets/img/icons/pickup-location.png" alt>
                                    </div>
                                    <div class="choose-content">
                                        <h4>Many Pickup Location</h4>
                                        <p>Enables you to select from a variety of pickup sites throughout
                                            the city, guaranteeing simplicity and accessibility for your vehicle rental needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-primary">
                                        <img src="assets/img/icons/bx-user-check.svg" alt>
                                    </div>
                                    <div class="choose-content">
                                        <h4>Customer Satisfaction</h4>
                                        <p>Customer satisfaction is our priority. By offering a smooth
                                            and enjoyable car rental experience that is customized to meet your needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section about-testimonial testimonials-section">
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2 class="title text-white">What People say about us? </h2>
                </div>

                <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">

                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-02.jpg" class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Rabien Ustoc</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="description">Dreams Rent exceeded my expectations with its easy-to-use platform and
                                    diverse car options. Highly recommend!</p>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-03.jpg" class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Valerie L. Ellis</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="description">Outstanding service! The transparent pricing and reliable vehicles made
                                    my trip hassle-free. Will definitely use Dreams Rent again.</p>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-04.jpg" class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Laverne Marier</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="description">The user dashboard is fantastic! It kept me informed about my bookings and
                                     made managing multiple reservations a breeze. Great job, Dreams Rent!</p>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-06.jpg" class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Sydney Salmons</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="description">Dreams Rent made my last-minute trip a breeze. The quick booking process
                                    and friendly customer support were impressive!</p>
                            </div>
                        </div>
                    </div>


                    <div class="testimonial-item d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="quotes-head"></div>
                                <div class="review-box">
                                    <div class="review-profile">
                                        <div class="review-img">
                                            <img src="assets/img/profiles/avatar-07.jpg" class="img-fluid" alt="img">
                                        </div>
                                    </div>
                                    <div class="review-details">
                                        <h6>Lucas Moquin</h6>
                                        <div class="list-rating">
                                            <div class="list-rating-star">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <p><span>(5.0)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="description">Exceptional service! The safety features and cleanliness of the rented
                                    car added an extra layer of satisfaction to my travel experience with Dreams Rent.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section faq-section bg-light-primary">
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>Frequently Asked Questions </h2>
                </div>

                <div class="faq-info">
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">What do I need to book a car on Dreams Rent?</a>
                        </h4>
                        <div id="faqOne" class="card-collapse collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">In which
                                areas do you operate?</a>
                        </h4>
                        <div id="faqTwo" class="card-collapse collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Do I need my own insurance?</a>
                        </h4>
                        <div id="faqThree" class="card-collapse collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">What is the cancellation policy on Dreams Rent?</a>
                        </h4>
                        <div id="faqFour" class="card-collapse collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="faq-card bg-white" data-aos="fade-down">
                        <h4 class="faq-title">
                            <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">Can I get my car delivered to me?</a>
                        </h4>
                        <div id="faqFive" class="card-collapse collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="footer-top aos" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">

                                    <div class="footer-widget footer-menu">
                                        <h5 class="footer-title">About Company</h5>
                                        <p>At Dreams Rent, we're committed to giving our cherished clients the
                                            best possible automobile rental services. </p>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6">

                                    <div class="footer-widget footer-menu">
                                        <h5 class="footer-title">Vehicles Type</h5>
                                        <ul>
                                            <li>
                                                <a href="car-list.php">All Vehicles</a>
                                            </li>
                                            <li>
                                                <a href="car-list.php">Mazda</a>
                                            </li>
                                            <li>
                                                <a href="car-list.php">Audi</a>
                                            </li>
                                            <li>
                                                <a href="car-list.php">Honda</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6">

                                    <div class="footer-widget footer-menu">
                                        <h5 class="footer-title">Quick links</h5>
                                        <ul>
                                            <li>
                                                <a href="dashboard/sign-in.php" target="_blank">Admin Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="dashboard/sign-in.php" target="_blank">Owner Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="terms-condition.php" target="_blank">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="privacy-policy.php" target="_blank">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="footer-contact footer-widget">
                                <h5 class="footer-title">Contact Info</h5>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="feather-phone-call"></i></span>
                                        <div class="addr-info">
                                            <a href="tel:+1(888)7601940">+ 1 (888) 760 1940</a>
                                        </div>
                                    </div>
                                    <div class="footer-address">
                                        <span><i class="feather-mail"></i></span>
                                        <div class="addr-info">
                                            <a href="mailto:support@example.com">support@dreamsrent.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p>© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Dreams Rent. All Rights Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/aos/aos.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(document).on('keyup','#pickup_city',function(){
            $( "#pickup_city" ).autocomplete({
                source:function(request,response){
                    $.post("autocomplete.php",{'name':$( "#pickup_city" ).val()}).done(function(data, status){

                        response(JSON.parse(data));
                    });
                }
            });
        });

        $(document).on('keyup','#dropoff_city',function(){
            $( "#dropoff_city" ).autocomplete({
                source:function(request,response){
                    $.post("autocomplete.php",{'name':$( "#dropoff_city" ).val()}).done(function(data, status){

                        response(JSON.parse(data));
                    });
                }
            });
        });
        $(document).ready(function () {
            getPopularCar('all');

            $(".most-popular").click(function () {
                getPopularCar($(this).data('value'));
            })
            function getPopularCar(type) {
                type = type ?? 'all';
                $.ajax({
                    url: "fetch-popular-car.php",
                    method: "POST",
                    data: {
                        type: type
                    },
                    success: function (data) {
                        $('.show-car').html(data);
                    }
                });
            }
        })

    </script>
</body>

</html>
