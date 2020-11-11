<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
    $id = $conn->real_escape_string($_POST['id']);
    $newName = $conn->real_escape_string($_POST['newName']);

    $sql = "UPDATE `oaaf_users` SET name='$newName' WHERE id = '$id'";
    $result = $conn->query($sql);
    
    if($result == true){
        $_SESSION['name'] = $newName;
    }

    header("location: ../index.php?page=profile");
}