<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamguystech.com/html/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 10:14:19 GMT -->

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
                        <h1>Reset Password</h1>
                        <p class="account-subtitle">Your new password must be different from previous used passwords.</p>
                        <form method="post">
                            <div class="form-group">
                                <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="conpassword">Confirm Password <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input type="password" class="form-control" id="conpassword" name="conpassword" placeholder="Re-enter your password" required title="Both password should match" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                </div>
                            </div>
                            <button class="btn btn-outline-light w-100 btn-size">Save Changes</button>
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
                        <div class="col-md-6 order-lg-last">
                            <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a class="nav-link terms-policy" href="terms-condition.php" target="_blank">Terms & Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link terms-policy" href="privacy-policy.php" target="_blank">Privacy Policy</a>
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