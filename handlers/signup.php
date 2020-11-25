<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    if (!empty($_POST['newName'])) {
        $name = $conn->real_escape_string($_POST['newName']);
    } else {
        $name = "Sømand";
    }

    $email = $conn->real_escape_string($_POST['newEmail']);
    $password = $conn->real_escape_string($_POST['newPassword']);
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `oaaf_users`(`email`, `password`, `name`) VALUES ('$email', '$password_hashed', '$name')";
    $result = $conn->query($sql);

    if ($result === true) {
        $sql = "SELECT `id`, `password`, `name`, `time_at_sea`, `trips`, `fb_id` FROM `oaaf_users` WHERE email = '$email'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while ($obj = $result->fetch_object()) {
                $_SESSION['logged'] = true;
                $_SESSION['at_sea'] = false;
                $_SESSION['id'] = $obj->id;
                $_SESSION['name'] = $obj->name;
                $_SESSION['email'] = $email;
                $_SESSION['time_at_sea'] = $obj->time_at_sea;
                $_SESSION['trips'] = $obj->trips;
                $_SESSION['fb_id'] = $obj->fb_id;

                $rank_id = $obj->rank_id;

                $sql = "SELECT `id`, `name`, `img` FROM `oaaf_ranks` WHERE id = '$rank_id'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($obj = $result->fetch_object()) {
                        $_SESSION['rank_name'] = $obj->name;
                        $_SESSION['rank_img'] = $obj->img;
                    }
                }

                header("location: ../index.php");
            }
        }
    } else {
        $_SESSION['newName'] = $name;
        $_SESSION['newEmail'] = $email;
        header("location: ../pages/login.php?signup=false");
    }
}