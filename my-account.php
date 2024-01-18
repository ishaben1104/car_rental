<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'include/session.php';
include 'config/connection.php';

$driver_id = $_SESSION['driver_id'];
if (isset($driver_id)){
    $getDriverSql = "SELECT * FROM `drivers` WHERE driver_id = '$driver_id'";
    $getDriverResult = $conn->query($getDriverSql);
    $rowDriver = $getDriverResult->fetch_assoc();
    //Execute the query
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["updateDriver"])) {
            //Retrieve form data
            $name = $_POST["name"];
            $email = $_POST["email"];
            $contact_no = $_POST["phone"];
            $address = $_POST["address"];
            $zipcode = $_POST["code"];
            $gender = $_POST["gender"];
            $drivingLicenseNo = $_POST["dlno"];

            //SQL query to inser data into the database
            $sql = "UPDATE `drivers` SET `name` = '$name',`email` = '$email',`contact_no` = '$contact_no',`address` = '$address',`zipcode` = '$zipcode',`gender` = '$gender',`driving_license_no` = '$drivingLicenseNo' WHERE driver_id = '$driver_id'";

            //Execute the query
            if ($conn->query($sql) === TRUE) {
                $user_id = $rowDriver["user_id"];
                //SQL query to inser data into the database
                $sqlUser = "UPDATE `user_registration` SET `fullname` = '$name',`email` = '$email' WHERE user_id = '$user_id'";
                $conn->query($sqlUser);

                echo "<h3>Driver Updated Successfully!</h3>";
                echo "<script> location.href = 'my-account.php'; </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                die;
            }
        }
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
                        <h2 class="breadcrumb-title">My Account</h2>
                    </div>
                </div>
            </div>
        </div>

        <section class="section car-listing my-account">
            <div class="container">
                <div class="row">
                    <!-- sidebar -->
                    <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                        <div class="user-info text-center">
                            <div class="user-img text-center">
                                <img src="assets/img/profiles/avatar-07.jpg" alt>
                            </div>
                            <h5 class="mb-20 theme-color-black"><?php echo $_SESSION['fullname']; ?></h5>
                        </div>
                        <div class="nav flex-column nav-pills flex-sm-fill text-sm-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">My Profile</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Bookings</button>
                        </div>
                    </div>
                    <!-- sidebar -->
                    <!-- content -->
                    <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                        <div class="row">
                            <div class="tab-content" id="v-pills-tabContent">
                                <!-- dashboard tab -->
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="dashboard mb-40">
                                        <div class="counter-group">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                                                    <div class="count-group flex-fill">
                                                        <div class="customer-count d-flex align-items-center">
                                                            <div class="count-img black-bg">
                                                                <i class="fas fa-calendar-alt text-white f-40"></i>
                                                            </div>
                                                            <div class="count-content">
                                                                <h4><span class="counterUp">16</span>K+</h4>
                                                                <p>Total Bookings</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                                                    <div class="count-group flex-fill">
                                                        <div class="customer-count d-flex align-items-center">
                                                            <div class="count-img black-bg">
                                                                <i class="far fa-calendar-times text-white f-40"></i>
                                                            </div>
                                                            <div class="count-content">
                                                                <h4><span class="counterUp">20</span>K+</h4>
                                                                <p>Cancelled Bookings</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                                                    <div class="count-group flex-fill">
                                                        <div class="customer-count d-flex align-items-center">
                                                            <div class="count-img black-bg">
                                                                <i class="far fa-calendar-check text-white f-40"></i>
                                                            </div>
                                                            <div class="count-content">
                                                                <h4><span class="counterUp">100</span>+</h4>
                                                                <p>Advance Bookings</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="theme-color-black f-23 mt-3 mb-20">Recent Bookings</h4>
                                    <div class="invoice-table-wrap">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-center table-bordered table-hover">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Car Name</th>
                                                                <th>Pick-up Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Drop-off Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Total</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>mini cooper</td>
                                                                <td>Romford</td>
                                                                <td>10-05-2019</td>
                                                                <td>Liverpool</td>
                                                                <td>10-05-2019</td>
                                                                <td>£599.00</td>
                                                                <td><span class="badge badge-dot bg-warning">Scheduled</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>mini cooper</td>
                                                                <td>Romford</td>
                                                                <td>10-05-2019</td>
                                                                <td>Liverpool</td>
                                                                <td>10-05-2019</td>
                                                                <td>£599.00</td>
                                                                <td><span class="badge badge-dot bg-success">Completed</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>mini cooper</td>
                                                                <td>Romford</td>
                                                                <td>10-05-2019</td>
                                                                <td>Liverpool</td>
                                                                <td>10-05-2019</td>
                                                                <td>£599.00</td>
                                                                <td><span class="badge badge-dot bg-danger">Cancelled</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile tab -->
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="booking-form">
                                        <div class="booking-title">
                                            <h5>Edit Details</h5>
                                        </div>
                                        <form method="post">
                                            <div class="row g-gs">
                                                <!-- Full name -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Full Name</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $rowDriver['name']; ?>" placeholder="name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Email -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email address</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-mail"></em>
                                                            </div>
                                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $rowDriver['email']; ?>" placeholder="email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Contact no. -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone">Contact No.</label>
                                                        <div class="form-control-wrap">
                                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone" value="<?php echo $rowDriver['contact_no']; ?>" pattern="[0-9]{10,11}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Zip code -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="code">Zipcode</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="code" name="code" placeholder="zipcode" value="<?php echo $rowDriver['zipcode']; ?>" pattern="[a-zA-Z0-9\s]{6,7}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Driving License Number -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="dlno">Driving License Number</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="dlno" name="dlno" placeholder="driving license number" value="<?php echo $rowDriver['driving_license_no']; ?>" pattern="[A-Z]{5}[0-9]{6}[A-Z]{2}[0-9]{1}[A-Z]{2}\s[0-9]{2}" required>
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
                                                            <input type="text" class="form-control" id="uname" name="uname" value="<?php echo $_SESSION['username']; ?>" placeholder="abc001" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Gender -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="gender">Gender</label>
                                                        <div class="form-control-wrap">
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="gender" value="male" id="sex-male" <?php if($rowDriver['gender'] == "male"){ ?> checked <?php } ?> required>
                                                                        <label class="custom-control-label" for="sex-male">Male</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="gender" value="female" id="sex-female" <?php if($rowDriver['gender'] == "female"){ ?> checked <?php } ?> required>
                                                                        <label class="custom-control-label" for="sex-female">Female</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="gender" value="other" id="sex-other" <?php if($rowDriver['gender'] == "other"){ ?> checked <?php } ?> required>
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
                                                            <textarea class="form-control form-control-sm" id="address" name="address" placeholder="address" required><?php echo $rowDriver['address']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" name="updateDriver" class="btn btn-lg btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- booking tab -->
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <h5 class="theme-color-black f-20 mb-20">Upcoming Bookings</h5>
                                    <div class="invoice-table-wrap mb-100">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-center table-bordered table-hover">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Car Name</th>
                                                                <th>Pick-up Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Drop-off Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Total</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>mini cooper</td>
                                                                <td>Romford</td>
                                                                <td>10-05-2019</td>
                                                                <td>Liverpool</td>
                                                                <td>10-05-2019</td>
                                                                <td>£599.00</td>
                                                                <td><button class="btn btn-danger">Cancel</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>mini cooper</td>
                                                                <td>Romford</td>
                                                                <td>10-05-2019</td>
                                                                <td>Liverpool</td>
                                                                <td>10-05-2019</td>
                                                                <td>£599.00</td>
                                                                <td><button class="btn btn-danger">Cancel</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="theme-color-black f-20 mb-20">Completed Bookings</h5>
                                    <div class="invoice-table-wrap mb-100">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-center table-bordered table-hover">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Car Name</th>
                                                                <th>Pick-up Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Drop-off Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Total</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>mini cooper</td>
                                                                <td>Romford</td>
                                                                <td>10-05-2019</td>
                                                                <td>Liverpool</td>
                                                                <td>10-05-2019</td>
                                                                <td>£599.00</td>
                                                                <td><span class="badge badge-dot bg-success">Completed</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="theme-color-black f-20 mb-20">Cancelled Bookings</h5>
                                    <div class="invoice-table-wrap mb-20">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-center table-bordered table-hover">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Car Name</th>
                                                                <th>Pick-up Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Drop-off Location</th>
                                                                <th>Date & Time</th>
                                                                <th>Total</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>mini cooper</td>
                                                                <td>Romford</td>
                                                                <td>10-05-2019</td>
                                                                <td>Liverpool</td>
                                                                <td>10-05-2019</td>
                                                                <td>£599.00</td>
                                                                <td><span class="badge badge-dot bg-danger">Cancelled</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content -->
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
