<?php

// Start session
session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    $user_id = $conn->real_escape_string($_POST['user_id']);
    $duration = $conn->real_escape_string($_POST['duration']);
    $start = $conn->real_escape_string($_POST['start']);
    $stop = $conn->real_escape_string($_POST['stop']);
    $date = $conn->real_escape_string($_POST['date']);
    $price = $conn->real_escape_string($_POST['price']);

    $sql = "INSERT INTO `oaaf_history`(`user_id`, `boat_name`, `duration`, `start_time`, `stop_time`, `date`, `price`) VALUES ('$user_id', 'C14', '$duration', '$start', '$stop', '$date', '$price')";
    $result = $conn->query($sql);
}

// Reset session variable
$_SESSION['at_sea'] = false;
$_SESSION['start_time'] = false;

// Redirect to index with GET to reset javascript sessionStorage
header("location: ../index.php?finished=true");
