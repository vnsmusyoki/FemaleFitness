<?php $message = $wef = $wet = $ref = $transaction_code = ''; ?>

<?php include 'header.php' ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Password</h4>
                        <p class="card-description">
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php
                            if (isset($_POST["editpassword"])) {
                                $password = mysqli_real_escape_string($conn, $_POST['password']);
                                $cpassword = mysqli_real_escape_string($conn, $_POST['confirm_password']);
                                $passlength = strlen($password);
                                if (empty($cpassword) || empty($password)) {
                                    $message = "
                                        <script>
                                            toastr.error('Please Provide all the details');
                                        </script>
                                    ";
                                } else if ($passlength < 6) {
                                    $message = "
                                    <script>
                                        toastr.error('Password should have atleast 6 characters');
                                    </script>
                                ";
                                } else if ($password !== $cpassword) {
                                    $message = "
                                    <script>
                                        toastr.error('Password failed to match');
                                    </script>
                                ";
                                } else {
                                    $newpass = md5($password);

                                    $update = "UPDATE `login` SET `login_password` = '$newpass' WHERE `login_id` = '$globalloggedinid'";
                                    $queryupdate = mysqli_query($conn, $update);
                                    if ($queryupdate) {
                                        $message = "
                                        <script>
                                            toastr.success('Password has been updated successfully');
                                        </script>
                                    ";
                                    }
                                }
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputName1"
                                            placeholder="****" name="password" value="">
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Confirm Password</label>
                                        <input type="password" class="form-control" id="exampleInputEmail3"
                                            placeholder="*******" name="confirm_password" value="">
                                    </div>
                                </div>
                            </div>

                            <button type=" submit" class="btn btn-primary mr-2 text-light" name="editpassword">
                                Update Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Email Address</h4>
                        <p class="card-description">
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["edittemail"])) {

                                $email = mysqli_real_escape_string($conn, $_POST['email']);
                                $passlength = strlen($password);
                                if (empty($email)) {
                                    $message = "
                                        <script>
                                            toastr.error('Please Provide your new valid email');
                                        </script>
                                    ";
                                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    $message = "
                                        <script>
                                            toastr.error('Incorrect email address. Provide a valid one.');
                                        </script>
                                    ";
                                } else {
                                    $checkemail = "SELECT *  FROM `instructor` WHERE `instructor_email` = '$email'";
                                    $queryemail = mysqli_query($conn, $checkemail);
                                    $checkemailrows = mysqli_num_rows($queryemail);
                                    if ($checkemailrows >= 1) {
                                        $message = "
                                    <script>
                                        toastr.error('Email Address already exists. Please confirm your email  again .');
                                    </script>";
                                    } else {
                                        $update = "UPDATE `instructor` SET `instructor_email` = '$email' WHERE `instructor_id` = '$memberid'";
                                        $queryupdate = mysqli_query($conn, $update);
                                        if ($queryupdate) {
                                            $message = "
                                        <script>
                                            toastr.success('Email Address has been updated successfully');
                                        </script>
                                    ";
                                        }
                                    }
                                }
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">

                                <div class=" col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3"
                                            placeholder="example@gmail.com" name="email" value="">
                                    </div>
                                </div>
                            </div>

                            <button type=" submit" class="btn btn-primary mr-2 text-light" name="edittemail">
                                Update Email Address
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Username</h4>
                        <p class="card-description">
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["editusername"])) {
                                $username = mysqli_real_escape_string($conn, $_POST['username']);
                                $usernamelength = strlen($username);
                                if (empty($username)) {
                                    $message = "
                                        <script>
                                            toastr.error('Please Provide your new username');
                                        </script>
                                    ";
                                } else if (!preg_match("/^[a-zA-z0-9 ]*$/", $username)) {
                                    $message = "
                                        <script>
                                            toastr.error('Incorrect email address. Provide a valid one.');
                                        </script>
                                    ";
                                } else if ($usernamelength < 8) {
                                    $message = "
                                    <script>
                                        toastr.error('Username should have atleast 8 characters');
                                    </script>
                                ";
                                } else {
                                    $checkemail = "SELECT *  FROM `login` WHERE `login_user_name` = '$username'";
                                    $queryemail = mysqli_query($conn, $checkemail);
                                    $checkemailrows = mysqli_num_rows($queryemail);
                                    if ($checkemailrows >= 1) {
                                        $message = "
                                    <script>
                                        toastr.error('username already exists. Please confirm your email  again .');
                                    </script>";
                                    } else {
                                        $update = "UPDATE `login` SET `login_user_name` = '$username' WHERE `login_id` = '$globalloggedinid'";
                                        $queryupdate = mysqli_query($conn, $update);
                                        if ($queryupdate) {
                                            $message = "
                                        <script>
                                            toastr.success('Username has been updated successfully');
                                        </script>
                                    ";
                                        }
                                    }
                                }
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">

                                <div class=" col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail3"
                                            placeholder="username" name="username" value="">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2 text-light" name="editusername">
                                Update Username
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.
                <a href="" target="_blank">Member Dashboard</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Grafted By Grace <i
                    class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<?php include 'footer.php' ?>
</body>

</html>