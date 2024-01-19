<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'config/connection.php';

    $car_id = $_GET['id'];
    # Prepare the SELECT Query
    $sqlCarDetails = "SELECT cd.*, cb.brand_name, cb.brand_id, cc.category_id, cc.category_name FROM car_details as cd LEFT JOIN car_brand as cb ON cd.brand_id = cb.brand_id LEFT JOIN car_category as cc ON cc.category_id = cd.category_id WHERE car_id = '$car_id'";
    $resultCarDetails = $conn->query($sqlCarDetails);
    $rowCarDetails = $resultCarDetails->fetch_assoc();
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
                        <h2 class="breadcrumb-title"><?php echo $rowCarDetails['car_name']; ?></h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Listings</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $rowCarDetails['car_name']; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="product-detail-head">
            <div class="container">
                <div class="detail-page-head">
                    <div class="detail-headings">
                        <div class="star-rated">
                            <div class="list-rating">
                                <span class="year"><?php echo $rowCarDetails['vehicle_model']; ?></span>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-list-rating"> 5.0 </span>
                            </div>
                            <div class="camaro-info">
                                <h3><?php echo $rowCarDetails['car_name']; ?></h3>
                                <div class="camaro-location">
                                    <div class="camaro-location-inner">
                                        <i class="feather-map-pin me-2"></i>
                                        <span class="me-2"> <b>Location :</b> <?php echo $rowCarDetails['location']; ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section product-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="detail-product">
                            <div class="slider detail-bigimg">
                                <div class="product-img">
                                    <img src="dashboard/assets/images/car/<?php echo $rowCarDetails['image']; ?>" alt="Slider">
                                </div>
                            </div>
                        </div>
                        <div class="review-sec extra-service">
                            <div class="review-header">
                                <h4>Extra Service</h4>
                            </div>
                            <span>Baby Seat - $10</span>
                        </div>

                        <div class="review-sec specification-card ">
                            <div class="review-header">
                                <h4>Specifications</h4>
                            </div>
                            <div class="card-body">
                                <div class="lisiting-featues">
                                    <div class="row">
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="assets/img/specification/specification-icon-1.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Body </span>
                                                <h6> <?php echo $rowCarDetails['category_name']; ?></h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="assets/img/specification/specification-icon-2.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Make </span>
                                                <h6> <?php echo $rowCarDetails['brand_name']; ?></h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="assets/img/specification/specification-icon-3.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Transmission </span>
                                                <h6> <?php echo $rowCarDetails['transmission']; ?></h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="assets/img/specification/specification-icon-4.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Fuel Type </span>
                                                <h6> <?php echo $rowCarDetails['fuel_type']; ?></h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="assets/img/specification/specification-icon-5.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Mileage </span>
                                                <h6><?php echo $rowCarDetails['mileage']; ?> Km</h6>
                                            </div>
                                        </div>
                                        <div class="featureslist d-flex align-items-center col-lg-3 col-md-4">
                                            <div class="feature-img">
                                                <img src="assets/img/specification/specification-icon-7.svg" alt>
                                            </div>
                                            <div class="featues-info">
                                                <span>Year</span>
                                                <h6> <?php echo $rowCarDetails['vehicle_model']; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-sec listing-feature">
                            <div class="review-header">
                                <h4>Car Features</h4>
                            </div>
                            <div class="listing-description">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Multi-zone A/C</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Heated front seats</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Andriod Auto</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Navigation system</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Premium sound system</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Bluetooth</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Keyles Start</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Memory seat</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>6 Cylinders</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Adaptive Cruise Control</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>Intermittent wipers</li>
                                            <li><span><i class="fa-solid fa-check-double"></i></span>4 power windows</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-sec listing-review">
                            <div class="review-header">
                                <h4>Reviews<span class="me-2">(2)</span></h4>
                                <div class="reviewbox-list-rating">
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span> (5 out of 5)</span>
                                    </p>
                                </div>
                            </div>
                            <div class="review-card">
                                <div class="review-header-group">
                                    <div class="review-widget-header">
                                        <span class="review-widget-img">
                                            <img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt>
                                        </span>
                                        <div class="review-design">
                                            <h6>Johnson</h6>
                                            <p>02 Jan 2023</p>
                                        </div>
                                    </div>
                                    <div class="reviewbox-list-rating">
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span> (5.0)</span>
                                        </p>
                                    </div>
                                </div>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s </p>
                                <ul class="review-list-rating">
                                    <li>
                                        quality
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                    <li>
                                        Price
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                    <li>
                                        Comfort
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                    <li>
                                        Driving
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="review-card">
                                <div class="review-header-group">
                                    <div class="review-widget-header">
                                        <span class="review-widget-img">
                                            <img src="assets/img/profiles/avatar-02.jpg" class="img-fluid" alt>
                                        </span>
                                        <div class="review-design">
                                            <h6>Casandra</h6>
                                            <p>02 Jan 2023</p>
                                        </div>
                                    </div>
                                    <div class="reviewbox-list-rating">
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span> (5.0)</span>
                                        </p>
                                    </div>
                                </div>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It was popularised in the 1960s </p>
                                <ul class="review-list-rating">
                                    <li>
                                        quality
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                    <li>
                                        Price
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                    <li>
                                        Comfort
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                    <li>
                                        Driving
                                        <p>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="review-sec leave-reply-form">
                            <div class="review-header">
                                <h4>Leave a Reply</h4>
                            </div>
                            <div class="card-body">
                                <div class="review-list">
                                    <ul>
                                        <li class="review-box feedbackbox mb-0">
                                            <div class="review-details">
                                                <form class="#">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Full Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Email Address <span class="text-danger">*</span></label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Comments </label>
                                                                <textarea rows="4" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submit-btn">
                                                        <button class="btn btn-primary submit-review" type="submit"> Submit Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="review-sec mt-0">
                            <div class="review-header">
                                <h4>Check Availability</h4>
                            </div>
                            <div class>
                                <form class>
                                    <ul>
                                        <li class="column-group-main">
                                            <div class="form-group">
                                                <label>Pickup Location</label>
                                                <div class="group-img">
                                                    <input type="text" class="form-control" placeholder="45, 4th Avanue  Mark Street USA">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-main">
                                            <div class="form-group">
                                                <label>Dropoff Location</label>
                                                <div class="group-img">
                                                    <input type="text" class="form-control" placeholder="78, 10th street Laplace USA">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-main">
                                            <div class="form-group m-0">
                                                <label>Pickup Date</label>
                                            </div>
                                            <div class="form-group-wrapp sidebar-form">
                                                <div class="form-group me-2">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-main">
                                            <div class="form-group m-0">
                                                <label>Return Date</label>
                                            </div>
                                            <div class="form-group-wrapp sidebar-form">
                                                <div class="form-group me-2">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="group-img">
                                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="column-group-last">
                                            <div class="form-group mb-0">
                                                <div class="search-btn">
                                                    <button class="btn btn-primary check-available w-100" type="button" data-bs-toggle="modal" data-bs-target="#pages_edit"> Check Availability</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <div class="review-sec extra-service mt-0">
                            <div class="review-header">
                                <h4>Listing Owner Details</h4>
                            </div>
                            <div class="owner-detail">
                                <div class="owner-img">
                                    <a href><img src="assets/img/profiles/avatar-07.jpg" alt></a>
                                </div>
                                <div class="reviewbox-list-rating">
                                    <h5><a>Brooklyn Cars</a></h5>
                                    <p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span> (5.0)</span>
                                    </p>
                                </div>
                            </div>
                            <ul class="booking-list">
                                <li>
                                    No of Listings
                                    <span>05</span>
                                </li>
                                <li>
                                    No of Bookings
                                    <span>225</span>
                                </li>
                                <li>
                                    Verification
                                    <h6>Verified</h6>
                                </li>
                            </ul>
                            <div class="message-btn">
                                <a href="#" class="btn btn-order">Message to owner</a>
                            </div>
                        </div>
                        <div class="review-sec share-car mt-0">
                            <div class="review-header">
                                <h4>Share this car</h4>
                            </div>
                            <ul class="nav-social">
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p fi-icon"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="review-sec share-car mt-0 mb-0">
                            <div class="review-header">
                                <h4>View Location</h4>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.7475515416095!2d-0.08046172431747409!3d51.517847309941324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cb3a11fde55%3A0x9e5f734778f9e989!2sNorthumbria%20University%20-%20London!5e0!3m2!1sen!2suk!4v1701425598351!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin" class="iframe-video"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal custom-modal fade check-availability-modal" id="pages_edit" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="form-header text-start mb-0">
                            <h4 class="mb-0 text-dark fw-bold">Availability Details</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="align-center" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="available-for-ride">
                                    <p><i class="fa-regular fa-circle-check"></i>Chevrolet Camaro is available for a ride</p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="row booking-info">
                                    <div class="col-md-4 pickup-address">
                                        <h5>Pickup</h5>
                                        <p>45, 4th Avanue Mark Street USA</p>
                                        <span>Date & time : 11 Jan 2023</span>
                                    </div>
                                    <div class="col-md-4 drop-address">
                                        <h5>Drop Off</h5>
                                        <p>78, 10th street Laplace USA</p>
                                        <span>Date & time : 11 Jan 2023</span>
                                    </div>
                                    <div class="col-md-4 booking-amount">
                                        <h5>Booking Amount</h5>
                                        <h6><span>$300 </span> /day</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="booking-info seat-select">
                                    <h6>Extra Service</h6>
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>
                                        Baby Seat - <span class="ms-2">$10</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="booking-info pay-amount">
                                    <h6>Deposit Option</h6>
                                    <div class="radio radio-btn">
                                        <label>
                                            <input type="radio" name="radio"> Pay Deposit
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="radio"> Full Amount
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="booking-info service-tax">
                                    <ul>
                                        <li>Booking Price <span>$300</span></li>
                                        <li>Extra Service <span>$10</span></li>
                                        <li>Tax <span>$5</span></li>
                                    </ul>
                                </div>
                                <div class="grand-total">
                                    <h5>Grand Total</h5>
                                    <span>$315</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="booking.php" class="btn btn-back">Go to Details<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include 'include/footer.php';
        ?>

    </div>
    <?php
    include 'include/footer-scripts.php';
    ?>
</body>

</html>
