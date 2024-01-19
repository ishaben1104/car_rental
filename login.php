<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config/connection.php';


// Check if user is logged in
if (isset($_SESSION['username']) != "") {
    header("Location:index.php");
}

//Check if the form was submitted
if (isset($_POST['login'])) {
    $username = $_POST["uname"];
    $password = SHA1($_POST["password"]);

    $sql = "SELECT * FROM `user_register` where username = '$username' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the first (and only) row
        $row = $result->fetch_assoc();
        $user_id = $row['user_id'];
        $getDriverSql = "SELECT * FROM `drivers` WHERE user_id = '$user_id'";
        $getDriverResult = $conn->query($getDriverSql);
        $rowDriver = $getDriverResult->fetch_assoc();
        if ($row['role_type'] == "driver") {
            $_SESSION['username'] = $row['username'];
            $_SESSION['fullname'] = $row['full_name'];
            $_SESSION['roletype'] = $row['role_type'];
            $_SESSION['driver_id'] = $rowDriver['driver_id'];
            echo "<h3>Login Successful!</h3>";
            echo "<script> location.href = 'index.php'; </script>";
        } else {
            echo 'No records found';
        }
    } else {
        echo 'No records found';
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
                        <h1 class="mb-40">Sign In</h1>
                        <form method="post">
                            <div class="form-group">
                                <label class="form-label" for="uname">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" id="uname" name="uname" placeholder="Enter your username" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" id="password" name="password" class="form-control pass-input" placeholder="Enter your password" required>
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
                            </div>
                            <button type="submit" name="login" class="btn btn-outline-light w-100 btn-size mt-1">Sign In</button>
                            <div class="text-center dont-have">Don't have an account yet? <a href="register.php">Register</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="log-footer">
            <div class="container">
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-text nav nam-sm justify-content-center justify-content-lg-start">
                                <p class="text-soft">Copyright &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script> Dreams Rent. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a class="nav-link terms-policy" href="terms-condition.php" target="_blank">Terms & Condition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-soft terms-policy" href="privacy-policy.php" target="_blank">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery-3.6.4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>