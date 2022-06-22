<?php
session_start();
if (!isset($_SESSION['member'])) {
    echo "<script>alert('yes it is not set');</script>";
    header('Location: ../../login.php');
} else {
    include '../../db-connection.php';
    $email = $_SESSION['member'];
      $checkemail = "SELECT *  FROM `login` WHERE `login_user_name`= '$email' ";
    $queryemail = mysqli_query($conn, $checkemail);
    $checkemailrows = mysqli_num_rows($queryemail);
    if ($checkemailrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($queryemail)) {
            $globalusername = $fetch['login_user_name']; 
            $globalloggedinid = $fetch['login_id'];
            $memberid = $fetch['login_member_id'];
           
            $checkclient = "SELECT *  FROM `member` WHERE `member_id`= '$memberid'";
            $queryemail = mysqli_query($conn, $checkclient);
            $checkclientrows = mysqli_num_rows($queryemail);
             if($checkclientrows >= 1){
                while($fetchclient = mysqli_fetch_assoc($queryemail)){
                    $globalmembername = $fetchclient['member_fullname'];
                }
             }

             global $globalmembername; global $memberid;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Member Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="../css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../css/toastr-btn.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/toastr.min.js"></script>
    <script src="../js/toastr-options.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="dashboard.php"><img src="../images/logo.svg" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>

                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="../images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="settings.php">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="logout.php">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="workout-plans.php">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">All Work Out Plans</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workout-plans.php">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">My Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workout-plans.php">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">All Payments</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="workout-plans.php">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">My Profile</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->