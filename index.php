<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config/connection.php';
include 'include/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'include/header-links.php';
?>

<body>
    <div class="main-wrapper">
        <?php
        include 'include/header.php';
        ?>
        <!-- banner section -->
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
                                <a href="listing-grid.php" class="btn btn-view d-inline-flex align-items-center">View
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

        <!-- car search section -->
        <div class="section-search">
            <div class="container">
                <div class="search-box-banner">
                    <form action="listing-grid.php">
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

        <!-- how it workds section -->
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

        <!-- popular cars section -->
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
                                        <a class="most-popular" data-bs-toggle="tab" data-value="<?php echo $row['brand_name']; ?>">
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
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-down">
                                <div class="listing-item">
                                    <div class="listing-img">
                                        <a href="listing-details.php">
                                            <img src="assets/img/cars/car-08.jpg" class="img-fluid" alt="Toyota">
                                        </a>
                                        <div class="fav-item">
                                            <span class="featured-text">Toyota</span>
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <div class="listing-features">
                                            <a href="javascript:void(0)" class="author-img">
                                                <img src="assets/img/profiles/avatar-08.jpg" alt="author">
                                            </a>
                                            <h3 class="listing-title">
                                                <a href="listing-details.php">Toyota Tacoma 4WD</a>
                                            </h3>
                                            <div class="list-rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span>(5.0)</span>
                                            </div>
                                        </div>
                                        <div class="listing-details-group">
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-01.svg" alt="Auto"></span>
                                                    <p>Auto</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-02.svg" alt="22 miles"></span>
                                                    <p>22 miles</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-03.svg" alt="Diesel"></span>
                                                    <p>Diesel</p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-04.svg" alt="Power"></span>
                                                    <p>Power</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-05.svg" alt="2019"></span>
                                                    <p>2019</p>
                                                </li>
                                                <li>
                                                    <span><img src="assets/img/icons/car-parts-06.svg" alt="Persons"></span>
                                                    <p>5 Persons</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-location-details">

                                            <div class="listing-price">
                                                <h6>£30 <span>/ Day</span></h6>
                                            </div>
                                        </div>
                                        <div class="listing-button">
                                            <a href="listing-details.php" class="btn btn-order"><span><i class="feather-calendar me-2"></i></span>Rent Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- popular car categories section -->
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
                                            <img src="assets/img/cars/mp-vehicle-01.png" class="img-fluid" alt="Popular Cartypes">
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
                    <a href="listing-grid.php" class="btn btn-view d-inline-flex align-items-center">View all Cars
                        <span><i class="feather-arrow-right ms-2"></i></span></a>
                </div>

            </div>
        </section>

        <!-- facts by numbers section -->
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

                <div class="counter-group">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/bx-heart.svg" alt>
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">16</span>K+</h4>
                                        <p class="mh-45">Happy Customers</p>
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
                                        <h4><span class="counterUp">20</span>K+</h4>
                                        <p class="mh-45">Completed Bookings</p>
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
                                        <h4><span class="counterUp">100</span>+</h4>
                                        <p class="mh-45">Count of Cars</p>
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
                                        <h4><span class="counterUp">80</span>+</h4>
                                        <p class="mh-45">Car Owners</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- why coose us section -->
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

        <!-- testimonials section -->
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
                                    made managing multiple reservations a breeze.</p>
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
                                    car added an extra layer of satisfaction to my travel experience.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- faq section -->
        <section class="section faq-section bg-light-primary">
            <div class="container">
                <div class="section-heading" data-aos="fade-down">
                    <h2>Frequently Asked Questions </h2>
                </div>
                <div class="faq-info">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="faq-card bg-white" data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">What do I need to book a car on Dreams Rent?</a>
                                </h4>
                                <div id="faqOne" class="card-collapse collapse">
                                    <p>To reserve a car on Dreams Rent in the UK, you must first register for an
                                        account, have a valid driver's license, and be at least 21 years old.
                                        You'll enter your driver's license and some additional information to go
                                        through a brief approval procedure when you book your first trip. Most of
                                        the time, you'll receive approval right away and be good to go for any
                                        upcoming family vacations, business trips, and road trips!
                                    </p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Do I need my own insurance?</a>
                                </h4>
                                <div id="faqThree" class="card-collapse collapse">
                                    <p>No, you can reserve a car on Dreams Rent without having to have personal insurance.</p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Do I need a UK license to drive in the UK?</a>
                                </h4>
                                <div id="faqFour" class="card-collapse collapse">
                                    <p>No, a UK driver's license is not required to rent a car in the UK. However,
                                        you must require a current driver's license, as the majority of foreign
                                        licenses are recognized in the US, Canada, Australia, and the UK.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-card bg-white" data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">Can I get my car delivered to me?</a>
                                </h4>
                                <div id="faqFive" class="card-collapse collapse">
                                    <p>Indeed, a lot of car owners do offer delivery to specific delivery places or to
                                        travel hubs like hotels, train stations, and airports. To save time and
                                        effort, you can have your car delivered to your hotel or vacation rental;
                                        alternatively, you can find cars on Dreams Rent close to hundreds of airports.</p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">Do I need a credit card to rent a car?</a>
                                </h4>
                                <div id="faqSix" class="card-collapse collapse">
                                    <p>To pick up a rental car, you must have a working credit card. This needs to
                                        be in the primary driver's name, cannot be a debit or credit card that has
                                        been pre-paid, and needs to have enough money on hand.
                                    </p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Can I cancel my reservation?</a>
                                </h4>
                                <div id="faqSeven" class="card-collapse collapse">
                                    <p>Certainly! By signing into your account on our website and going to the
                                        "My Account -> Bookings" section, you can cancel your reservation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include 'include/footer.php';
        ?>
    </div>

    <?php
    include 'include/footer-scripts.php';
    ?>
    <script>
        $(document).on('keyup', '#pickup_city', function() {
            $("#pickup_city").autocomplete({
                source: function(request, response) {
                    $.post("autocomplete.php", {
                        'name': $("#pickup_city").val()
                    }).done(function(data, status) {

                        response(JSON.parse(data));
                    });
                }
            });
        });

        $(document).on('keyup', '#dropoff_city', function() {
            $("#dropoff_city").autocomplete({
                source: function(request, response) {
                    $.post("autocomplete.php", {
                        'name': $("#dropoff_city").val()
                    }).done(function(data, status) {

                        response(JSON.parse(data));
                    });
                }
            });
        });
        $(".most-popular").click(function() {
            var type = $(this).data('value');
        })
    </script>
</body>

</html>