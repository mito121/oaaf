<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    $user_id = $conn->real_escape_string($_POST['user_id']);
    $amount = $conn->real_escape_string($_POST['amount']);

    // Check if user has a wallet
    $sql = "SELECT `balance` FROM `oaaf_wallet` WHERE user_id = '$user_id'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) { // If wallet exists
        while ($obj = $result->fetch_object()) {
            $current_balance = $obj->balance;
        }
        $new_balance = $current_balance + $amount;

        $sql = "UPDATE `oaaf_wallet` SET `balance`='$new_balance' WHERE user_id = '$user_id'";
        $result = $conn->query($sql);

        if ($result == true) {
            $_SESSION['wallet_balance'] = $new_balance;
        }

        header("location: ../index.php?page=wallet");
    } else { // If user has no wallet
        $sql = "INSERT INTO `oaaf_wallet`(`user_id`, `balance`) VALUES ('$user_id', '$amount')";
        $result = $conn->query($sql);
        if ($result == true) {
            $_SESSION['wallet_balance'] = $amount;
        }
        header("location: ../index.php?page=wallet");
    }
}
