<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT `id`, `password`, `name`, `rank_id`, `fb_id` FROM `oaaf_users` WHERE email = '$email'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        while ($obj = $result->fetch_object()) {
            $hash = $obj->password;

            if (password_verify($password, $hash)) { // success
                $_SESSION['logged'] = true;
                $_SESSION['at_sea'] = false;
                $_SESSION['user_id'] = $user_id = $obj->id;
                $_SESSION['name'] = $obj->name;
                $_SESSION['email'] = $email;
                $_SESSION['time_at_sea'] = $obj->time_at_sea;
                $_SESSION['trips'] = $obj->trips;
                $_SESSION['fb_id'] = $obj->fb_id;

                // Get user rank info
                $rank_id = $_SESSION['rank_id'] = $obj->rank_id;

                $sql = "SELECT `id`, `name`, `img` FROM `oaaf_ranks` WHERE id = '$rank_id'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($obj = $result->fetch_object()) {
                        $_SESSION['rank_name'] = $obj->name;
                        $_SESSION['rank_img'] = $obj->img;
                    }
                }

                // Get user wallet info
                $sql = "SELECT `balance` FROM `oaaf_wallet` WHERE user_id='$user_id'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($obj = $result->fetch_object()) {
                        $_SESSION['wallet_balance'] = $obj->balance;
                    }
                }else{
                    $_SESSION['wallet_balance'] = 0;
                }

                // Redirect to index
                header("location: ../index.php");
            } else {
                header("location: ../pages/login.php?login=false"); // wrong password
            }
        }
    } else {
        header("location: ../pages/login.php?login=false"); // email doesnt exist
    }
}
