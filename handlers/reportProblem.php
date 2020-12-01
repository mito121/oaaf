<?php
session_start();
require_once '../includes/dbconnect.php';

$user_id = $conn->real_escape_string($_POST['id']);
$problem = $conn->real_escape_string($_POST['issue']);

$sql = "INSERT INTO `oaaf_userproblems`(`user_id`, `problem`) VALUES ('$user_id', '$problem' )";
$result = $conn->query($sql);

header("Location: ../index.php?page=help");

 ?>
