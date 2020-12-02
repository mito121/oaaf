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

    if ($_SESSION['rank_id'] == 5) {
        $entryFee = 0;
    } else {
        $entryFee = 10;
    }

    $sql = "INSERT INTO `oaaf_history`(`user_id`, `boat_name`, `duration`, `start_time`, `stop_time`, `date`, `price`, `entry_fee`, `price_per_min`, `trip_discount`) VALUES ('$user_id', 'C14', '$duration', '$start', '$stop', '$date', '$price', '$entryFee', '$price_per_min', '$discount')";
    $result = $conn->query($sql);

    
    // Increase user rank if needed
    $sql = "SELECT COUNT(id) AS trip_count FROM `oaaf_history` WHERE user_id = '$user_id'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        while ($obj = $result->fetch_object()) {
            $trip_count = $obj->trip_count;
        }
        
        // Set new rank
        if ($trip_count >= 0 && $trip_count <= 4) {
            $new_rank = 1;
        } elseif ($trip_count >= 5 && $trip_count <= 9) {
            $new_rank = 2;
        } elseif ($trip_count >= 10 && $trip_count <= 14) {
            $new_rank = 3;
        } elseif ($trip_count >= 15 && $trip_count <= 19) {
            $new_rank = 4;
        } else {
            $new_rank = 5;
        }

        // If new rank is not equal to old rank, update user rank
        if ($_SESSION['rank_id'] !== $new_rank) {
            $sql = "UPDATE `oaaf_users` SET `rank_id`='$new_rank' WHERE id = '$user_id'";
            $result = $conn->query($sql);

            if ($result == true) {
                $sql = "SELECT `name`, `img` FROM `oaaf_ranks` WHERE id = '$new_rank'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($obj = $result->fetch_object()) {
                        $_SESSION['rank_id'] = $new_rank;
                        $_SESSION['rank_name'] = $obj->name;
                        $_SESSION['rank_img'] = $obj->img;
                    }
                }
            }
        }
    }
}

// Reset session variable
$_SESSION['at_sea'] = false;
$_SESSION['start_time'] = false;

// Redirect to index with GET to reset javascript sessionStorage
header("location: ../index.php?finished=true");
