<?php
include 'db-connection.php';

$password = mysqli_real_escape_string($conn, $_POST['password']);
$username = mysqli_real_escape_string($conn, $_POST['username']);

if (empty($username) || empty($password)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else {
    $checkemail = "SELECT *  FROM `login` WHERE `login_user_name` = '$username'";
    $queryemail = mysqli_query($conn, $checkemail);
    $checkemailrows = mysqli_num_rows($queryemail);
    if ($checkemailrows >= 1) {
        while ($fetch = mysqli_fetch_assoc($queryemail)) {
            $dbpassword = $fetch['login_password'];
            $dbmember = $fetch['login_member_id'];
            $dbadmin = $fetch['login_admin_id'];
            $dbinstructor = $fetch['login_instructor_id'];
            $category = $fetch['login_rank'];
            $password = md5($password);
            if ($password !== $dbpassword) {
                $message = "
                <script>
                toastr.error('Incorrect password.');
            </script>";
            } else {
                
                if ($category == "instructor") {
                    session_start();
                    $_SESSION['instructor'] = $username;
                    echo "<script>window.location.replace('dashboards/instructor/dashboard.php');</script>";
                } else  if ($category == "member") {
                    session_start();
                    $_SESSION['member'] = $username;
                    echo "<script>window.location.replace('dashboards/member/dashboard.php');</script>";
                } else {
                    session_start();
                    $_SESSION['admin'] = $username;
                    echo "<script>window.location.replace('dashboards/admin/dashboard.php');</script>";
                }
            }
        }
    } else {

        $message = "
                <script>
                toastr.error('Username or Email Address does not exist.');
            </script>";
    }
}