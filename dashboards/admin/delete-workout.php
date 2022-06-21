<?php
session_start();
include '../../db-connection.php';
if (!isset($_SESSION['admin'])) {
    header('Location: ../../login.php');
} else {
    $loggedinmember = $_SESSION['admin'];
}
$dietcheck = $_GET['w'];
$checkproduct = "DELETE  FROM `workout` WHERE `workout_id` = '$dietcheck'";
$querycheckproduct = mysqli_query($conn, $checkproduct);
if ($querycheckproduct) {
    echo "<script>window.location.replace('all-workouts.php');</script>";
}