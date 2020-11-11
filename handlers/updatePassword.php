<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    $id = $conn->real_escape_string($_POST['id']);
    $newPassword = $conn->real_escape_string($_POST['newPassword']);
    $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE `oaaf_users` SET password='$newPasswordHash' WHERE id = '$id'";
    $result = $conn->query($sql);

    header("location: ../index.php?page=profile");
}