<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'config/connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact_no = $_POST["phone"];
    $address = $_POST["address"];
    $zipcode = $_POST["code"];
    $driving_license_no = $_POST["dlno"];
    $gender = $_POST["gender"];
    $username = $_POST["uname"];
    $password = sha1($_POST["password"]);
    $role_type = 'driver';

    //SQL query to inser data into the database
    $sqlUser = "INSERT INTO `user_register`(`role_type`,`full_name`, `email`, `username`, `password`) 
        VALUES ('$role_type','$name', '$email', '$username', '$password')";

    //Execute the query
    if ($conn->query($sqlUser) === TRUE) {
        $last_id = mysqli_insert_id($conn);

        //SQL query to insert data into the database
        $sql = "INSERT INTO `drivers`(`name`, `email`, `contact_no`, `address`, `zipcode`, `driving_license_no`, `gender`,`user_id`) 
        VALUES ('$name', '$email', '$contact_no', '$address', '$zipcode', '$driving_license_no', '$gender','$last_id')";
        $conn->query($sql);

        echo "<h3>Driver Added Successfully!</h3>";
        echo "<script> location.href='login.php'; </script>";
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
    <div class="main-wrapper login-body">
        <header class="log-header">
            <a href="index.php"><img class="img-fluid logo-dark" src="assets/img/logo.svg" alt="Logo"></a>
        </header>

        <div class="login-wrapper">
            <div class="loginbox">
                <div class="login-auth">
                    <div class="login-auth-wrap">
                        <div class="sign-group">
                            <a href="index.php" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Back To Home</a>
                        </div>
                        <h1 class="mb-40">Sign Up</h1>
                        <form method="post">
                            <div class="row g-gs">
                                <!-- Full name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Full Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email address</label>
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-mail"></em>
                                            </div>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact no. -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Contact No.</label>
                                        <div class="form-control-wrap">
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10,11}" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Zip code -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="code">Zipcode</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="code" name="code" placeholder="Enter your zipcode" pattern="[a-zA-Z0-9\s]{6,7}" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Driving License Number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="dlno">Driving License Number</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="dlno" name="dlno" placeholder="Enter your driving license number" pattern="[A-Z]{5}[0-9]{6}[A-Z]{2}[0-9]{1}[A-Z]{2}\s[0-9]{2}" required>
                                            <span class="f-12">e.g. FARME100165AB5EW </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Gender -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="gender">Gender</label>
                                        <div class="form-control-wrap">
                                            <ul class="custom-control-group d-flex justify-content-sm-between">
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="gender" value="male" id="sex-male" checked required>
                                                        <label class="custom-control-label" for="sex-male">Male</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="gender" value="female" id="sex-female" required>
                                                        <label class="custom-control-label" for="sex-female">Female</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="gender" value="other" id="sex-other" required>
                                                        <label class="custom-control-label" for="sex-other">Others</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" for="address">Address</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-sm" id="address" name="address" placeholder="Enter your address here" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Username -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="uname">Username</label>
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right">
                                                <em class="icon ni ni-user"></em>
                                            </div>
                                            <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your username" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                        </div>
                                    </div>
                                </div>
                                <!-- Confirm Password -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-label" for="conpassword">Confirm Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control" id="conpassword" name="conpassword" placeholder="Re-enter your password" required title="Both password should match" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to Dreams Rent <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="text-center dont-have">Already have an Account? <a href="login.php">Sign In</a></div>
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
                                <p class="text-soft">Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Dreams Rent. All Rights Reserved
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-last">
                            <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Terms & Condition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
