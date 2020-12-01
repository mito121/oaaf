<?php
session_start();
require_once '../includes/dbconnect.php';


$user_id = $_SESSION['id'];

$sql = "DELETE FROM `oaaf_users` WHERE id = '$user_id'";
$result = $conn->query($sql);

header("Location: ../pages/login.php");

 ?>
