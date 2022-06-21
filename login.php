<?php
session_start();
$username = $message = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Account Access</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./dashboards/vendors/feather/feather.css">
    <link rel="stylesheet" href="./dashboards/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./dashboards/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./dashboards/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="./dashboards/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">

                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" method="POST" action="">
                                <?php

                                if (isset($_POST["loginaccount"])) {

                                    require 'functions/login-validate.php';
                                }
                                ?>
                                <?php echo $message; ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Write username here" name="username"
                                        value="<?php echo $username; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="loginaccount"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        SIGN
                                        IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <a href="index.php">Return Home</a>
                                        </label>
                                    </div>
                                    <a href="member-register.php" class="auth-link text-black">Create Member
                                        Account?</a>
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register.php" class="text-primary">Create Instructor
                                        Account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./dashboards/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./dashboards/ojs/off-canvas.js"></script>
    <script src="./dashboards/js/hoverable-collapse.js"></script>
    <script src="./dashboards/js/template.js"></script>
    <script src="./dashboards/js/settings.js"></script>
    <script src="./dashboards/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>