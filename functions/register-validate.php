<?php
include 'db-connection.php';
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$location_address = mysqli_real_escape_string($conn, $_POST['location_address']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
$passwordlength = strlen($password);
$usernamelength = strlen($username);
$phonelength = strlen($phone_number);
if (empty($full_name) || empty($username) || empty($phone_number) || empty($email) || empty($location_address) || empty($password) || empty($confirmpassword)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z ]*$/", $full_name)) {
    $message = "
        <script>
            toastr.error('Provided an invalid names characters');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z0-9 ]*$/", $username)) {
    $message = "
        <script>
            toastr.error('Username format is incorrect');
        </script>
    ";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $message = "
        <script>
            toastr.error('Incorrect email address. Provide a valid one.');
        </script>
    ";
} else if ($passwordlength < 8) {
    $message = "
    <script>
        toastr.error('Password should have at least 8 characters.');
    </script>
";
} else if ($phonelength !== 10) {
    $message = "
    <script>
        toastr.error('Phone number must have 10 digits.');
    </script>
";
} else if ($usernamelength < 8) {
    $message = "
    <script>
        toastr.error('Username field require at least 8 characters.');
    </script>";
} else if ($password !== $confirmpassword) {
    $message = "
    <script>
        toastr.error('password details failed to match.');
    </script>";
} else {
    $checkphone = "SELECT *  FROM `instructor` WHERE `instructor_mobile` = '$phone_number'";
    $queryphone = mysqli_query($conn, $checkphone);
    $checkphonerows = mysqli_num_rows($queryphone);
    if ($checkphonerows >= 1) {
        $message = "
        <script>
            toastr.error('Phone Number already exists. Please confirm your number again .');
        </script>";
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

            $checkusername = "SELECT *  FROM `login` WHERE `login_user_name` = '$username'";
            $queryusername = mysqli_query($conn, $checkusername);
            $checkusernamerows = mysqli_num_rows($queryusername);
            if ($checkusernamerows >= 1) {
                $message = "
                <script>
                    toastr.error('Username already exists. Please confirm your email  again .');
                </script>";
            } else {
                $password = md5($password);
                $insertlogin = "INSERT INTO `login`(`login_user_name`,`login_password`, `login_rank`, `login_admin_id`, `login_member_id`, `login_instructor_id`) VALUES ('$username', '$password','instructor', null, null, null)";
                $querylogin = mysqli_query($conn, $insertlogin);
                $lastid =  mysqli_insert_id($conn);
                if ($querylogin) {

                    $addstaff = "INSERT INTO `instructor`(`instructor_fullname`, `instructor_mobile`, `instructor_address`, `instructor_email`, `instructor_user_id`) VALUES ('$full_name', '$phone_number','$location_address','$email', '$lastid')";
                    $querystaff = mysqli_query($conn, $addstaff);
                    $lastmemberid =  mysqli_insert_id($conn);
                    if ($querystaff) {
                        $updatelogin = "UPDATE `login` SET `login_instructor_id` = '$lastmemberid' WHERE `login_id` = '$lastid'";
                        $queryupdatelogin = mysqli_query($conn, $updatelogin);
                        if ($queryupdatelogin) {
                            $message = "
                            <script>
                                toastr.success('Registration Successful. Please login to continue.');
                            </script>";
                            echo "<script>window.location.replace('login.php');</script>";
                        } else {
                            $message = "
                            <script>
                                toastr.error('Registration Failed. Please try again.');
                            </script>";
                        }
                    }
                }
            }
        }
    }
}