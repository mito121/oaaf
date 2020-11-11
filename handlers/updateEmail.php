<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    $id = $conn->real_escape_string($_POST['id']);
    $newEmail = $conn->real_escape_string($_POST['newEmail']);

    $sql = "UPDATE `oaaf_users` SET email='$newEmail' WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result == true) {
        $_SESSION['email'] = $newEmail;
    }

    header("location: ../index.php?page=profile");
}