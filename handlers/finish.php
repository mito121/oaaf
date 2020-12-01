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
    
    $price_per_min = $conn->real_escape_string($_POST['price_per_min']);
    $discount = $conn->real_escape_string($_POST['trip_discount']);

    if($_SESSION['rank_id'] == 5){
       $entryFee = 0;
    }else{
       $entryFee = 10;
    }

    $sql = "INSERT INTO `oaaf_history`(`user_id`, `boat_name`, `duration`, `start_time`, `stop_time`, `date`, `price`, `entry_fee`, `price_per_min`, `trip_discount`) VALUES ('$user_id', 'C14', '$duration', '$start', '$stop', '$date', '$price', '$entryFee', '$price_per_min', '$discount')";
    $result = $conn->query($sql);
}

// Reset session variable
$_SESSION['at_sea'] = false;
$_SESSION['start_time'] = false;

// Redirect to index with GET to reset javascript sessionStorage
header("location: ../index.php?finished=true");
