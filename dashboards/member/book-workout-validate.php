<?php
include '../../db-connection.php';
$wef = mysqli_real_escape_string($conn, $_POST['wef']);
$wet = mysqli_real_escape_string($conn, $_POST['wet']);
$workoutid = mysqli_real_escape_string($conn, $_POST['workout_id']);
$ref = mysqli_real_escape_string($conn, $_POST['ref']);
$code = mysqli_real_escape_string($conn, $_POST['transaction_code']);
$amount = mysqli_real_escape_string($conn, $_POST['workout_cost']);
$method = mysqli_real_escape_string($conn, $_POST['payment_method']);
$codelength = strlen($code);
if (empty($wef) || empty($wet) || empty($ref) || empty($code) || empty($method)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z ]*$/", $ref)) {
    $message = "
        <script>
            toastr.error('Provided an invalid work out reference characters');
        </script>
    ";
} else if ($codelength !== 10) {
    $message = "
        <script>
            toastr.error('Provided an invalid transaction code. pease confirm');
        </script>
    ";
} else {
    $checkcode = "SELECT *  FROM `payments` WHERE `payment_transaction_code` = '$code'";
    $queryphone = mysqli_query($conn, $checkcode);
    $checkphonerows = mysqli_num_rows($queryphone);
    if ($checkphonerows >= 1) {
        $message = "
        <script>
            toastr.error('This transaction code already exists .');
        </script>";
    } else {
        $checkredcord = "SELECT *  FROM `member_workout_plan` WHERE `plan_member_id` = '$memberid' AND `plan_workout_id`='$workoutid'";
        $queryphone = mysqli_query($conn, $checkredcord);
        $checkphonerows = mysqli_num_rows($queryphone);
        if ($checkphonerows >= 1) {
            $message = "
        <script>
            toastr.error('You have already booked this work out plan. Please see all my bookings.');
        </script>";
        } else {
            $addworkout =  "INSERT INTO `member_workout_plan`(`plan_member_id`, `plan_wef`, `plan_wet`, `plan_ref`, `plan_workout_id`, `plan_assigned_instructor_id`) VALUES ('$memberid', '$wef', '$wet', '$ref', '$workoutid', null)";
            $queryworkout = mysqli_query($conn, $addworkout);
            $lastid =  mysqli_insert_id($conn);
            if ($queryworkout) {
                $datenow = date('l, d/m/Y');
                $timenow = date('h:i:s a');
                $addworkpay =  "INSERT INTO `payments`(`payments_plan_id`, `payment_amount`, `payment_date`, `payment_time`, `payment_transaction_code`, `payment_mode`) VALUES ('$lastid', '$amount', '$datenow', '$timenow', '$code', '$method')";
                $querypay = mysqli_query($conn, $addworkpay);
                if ($querypay) {
                    $message = "
                <script>
                    toastr.error('New Workout has been added.');
                </script>";
                    echo "<script>window.location.replace('my-bookings.php');</script>";
                }
            }
        }
    }
}