<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    $id = $conn->real_escape_string($_POST['id']);
    $current_pw = $conn->real_escape_string($_POST['currentPw']);
    $newPassword = $conn->real_escape_string($_POST['newPassword']);
    $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

    // Get current password to verify user
    $sql = "SELECT password FROM `oaaf_users` WHERE id = '$id'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        while ($obj = $result->fetch_object()) {
            $db_pass = $obj->password;
        }

        if (password_verify($current_pw, $db_pass)) { // If current password is correct -> change password
            $sql = "UPDATE `oaaf_users` SET password='$newPasswordHash' WHERE id = '$id'";
            $result = $conn->query($sql);

            header("location: ../index.php?page=profile&pw_change=true");
        } else { // If current password is not correct -> error
            header("location: ../index.php?page=profile&pw_change=false");
        }
    }
}