<?php
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
        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12 col-12">
                        <h2 class="breadcrumb-title">About us</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- about us -->
        <section class="section about-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="about-img">
                            <div class="about-exp">
                                <span>12+ years of experiences</span>
                            </div>
                            <div class="abt-img">
                                <img src="assets/img/about-us.png" class="img-fluid" alt="About us">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="about-content">
                            <h6>ABOUT OUR COMPANY</h6>
                            <h2>Best Solution For Car Rental</h2>
                            <p>Welcome to Dreams Rent, your premier destination for hassle-free and
                                reliable car rentals. Established with a passion for providing top-notch
                                service, we take pride in offering a seamless and enjoyable experience for
                                all our customers.
                            </p>
                            <h6>OUR MISSION</h6>
                            <p>At Dreams Rent, our mission is to redefine the car rental experience.
                                We strive to make transportation convenient, affordable, and stress-free
                                for every traveler. Whether you're on a business trip, a family vacation,
                                or a weekend getaway, we have the perfect vehicle to suit your needs.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Empowering seamless journeys with flexible and affordable car rentals.</li>
                                        <li>Transforming travel experiences through accessible and convenient car rentals.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Driving freedom and convenience by providing on-demand car rental solutions.</li>
                                        <li>Enabling hassle-free mobility with our user-centric car rental services.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- how it works -->
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
</body>

</html>
