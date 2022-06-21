<?php
include '../../db-connection.php';
$name = mysqli_real_escape_string($conn, $_POST['workout_name']);
$cost = mysqli_real_escape_string($conn, $_POST['workout_cost']);
$workoutid = mysqli_real_escape_string($conn, $_POST['workout_id']);
$description = mysqli_real_escape_string($conn, $_POST['workout_description']);
if (empty($name) || empty($cost) || empty($description)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z ]*$/", $name)) {
    $message = "
        <script>
            toastr.error('Provided an invalid work out name characters');
        </script>
    ";
} else if (!preg_match("/^[0-9 ]*$/", $cost)) {
    $message = "
        <script>
            toastr.error('The cost format is incorrect');
        </script>
    ";
} else {
    $addworkout =  "UPDATE `workout` SET `workout_name`='$name', `workout_description`='$description', `workout_cost`='$cost' WHERE `workout_id` = '$workoutid'";
    $queryworkout = mysqli_query($conn, $addworkout);
    if ($queryworkout) {
        $message = "
                <script>
                    toastr.error('New Workout has been added.');
                </script>";
                echo "<script>window.location.replace('all-workouts.php');</script>";
    }
}