<?php
include 'config/connection.php';
include 'include/session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact_no = $_POST["phone"];
    $comment = $_POST["comments"];

    //SQL query to inser data into the database
    $sqlUser = "INSERT INTO `inquiries`(`name`, `email`, `contact_no`, `comments`) 
        VALUES ('$name','$email', '$contact_no', '$comment')";
    //Execute the query
    if ($conn->query($sqlUser) === TRUE) {
        echo "<h3>Inquiry sent successfully!</h3>";
        echo "<script> location.href='contact-us.php'; </script>";
    } else {
        echo "Error: " . $sqlUser . "<br>" . $conn->error;
        die;
    }
}

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
                    <h2 class="breadcrumb-title">Contact us</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-section">
        <div class="container">
            <div class="contact-info-area">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.1">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-phone-call"></i></span>
                            <h3>Phone Number</h3>
                            <a href="tel:+ 1 (888) 760 1940">+ 1 (888) 760 1940</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.2">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-mail"></i></span>
                            <h3>Email Address</h3>
                            <a href="mailto:support@example.com">support@dreamsrent.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.3">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-map-pin"></i></span>
                            <h3>Location</h3>
                            <p>110-114 Middlesex St, London E1 7HT</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-info-area" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.5">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/contact-info.jpg" class="img-fluid" alt="Contact">
                    </div>
                    <div class="col-lg-6">
                        <form method="post">
                            <div class="row">
                                <h1>Get in touch!</h1>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email Address <span class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10,11}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Comments <span class="text-danger">*</span></label>
                                        <textarea class="form-control" rows="4" cols="50" id="comments" name="comments" placeholder="Enter your comments" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="sendInquiry" class="btn contact-btn">Send Enquiry</button>
                        </form>
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
