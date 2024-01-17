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
                        <h1>Sign Up</h1>
                        <p class="account-subtitle">We'll send a confirmation code to your email.</p>
                        <form action="index.php">
                            <div class="form-group">
                                <label class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder>
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1">Sign Up</a>
                            <div class="text-center dont-have">Already have an Account? <a href="login.php">Sign In</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="log-footer">
            <div class="container-fluid">
                <div class="copyright">
                    <div class="copyright-text">
                        <p>© <script>
                                document.write(new Date().getFullYear())
                            </script> Dreams Rent. All Rights Reserved.</p>
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