<?php $full_name = $username = $phone_number = $password = $confirmpassword = $email  = $message = $date_of_birth = $gender = $start_date = $end_date = ''; ?>
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
    <link rel="stylesheet" type="text/css" href="./dashboards/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="./dashboards/css/toastr-btn.css">
    <script src="./dashboards/js/jquery-3.3.1.min.js"></script>
    <script src="./dashboards/js/toastr.min.js"></script>
    <script src="./dashboards/js/toastr-options.js"></script>
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
                            <h6 class="font-weight-light">Member Account.</h6>
                            <form class="pt-3" method="POST" action="" autocomplete="off">
                                <?php

                                if (isset($_POST["createaccount"])) {

                                    require 'functions/member-register-validate.php';
                                }
                                ?>
                                <?php echo $message; ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Member Full Name" name="full_name">
                                    <small class="text-muted form-text">Write Full Name</small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputPassword1"
                                        placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-lg" id="exampleInputPassword1"
                                        placeholder="07*********" name="phone_number">
                                    <small class="text-muted form-text">Valid Phone Number</small>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputPassword1"
                                        placeholder="Email@example.com" name="email">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control form-control-lg"
                                                id="exampleInputPassword1" placeholder="Email@example.com"
                                                name="date_of_birth">
                                            <small class="text-muted form-text">Date of Birth</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select class="form-control form-control-lg" id="exampleInputPassword1"
                                                cols="3" rows="4" placeholder="Instruction Location Address"
                                                name="gender">
                                                <option value="">Click to Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <small class="text-muted form-text">Select Gender</small>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Confirm Password"
                                        name="confirmpassword">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control form-control-lg"
                                                id="exampleInputPassword1" placeholder="Confirm Password"
                                                name="start_date">
                                            <small class="text-muted form-text">Start Date</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control form-control-lg"
                                                id="exampleInputPassword1" placeholder="Confirm Password"
                                                name="end_date">
                                            <small class="text-muted form-text">End Date</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="createaccount"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        Member Account Sign Up
                                    </button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <a href="index.php">Return Home</a>
                                        </label>
                                    </div>
                                    <a href="login.php" class="auth-link text-black">Sign In?</a>
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