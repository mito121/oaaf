<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
   if (!empty($_POST['newName'])) {
      $name = $conn->real_escape_string($_POST['newName']);
   } else {
      $name = "Skipper Løgsovs";
   }

   $email = $conn->real_escape_string($_POST['newEmail']);
   $password = $conn->real_escape_string($_POST['newPassword']);
   $password_hashed = password_hash($password, PASSWORD_DEFAULT);

   $sql = "INSERT INTO `oaaf_users`(`email`, `password`, `name`) VALUES ('$email', '$password_hashed', '$name')";
   $result = $conn->query($sql);

   if ($result === true) {
      die("Whalecum $name");
   } else {
      $output = "Den valgte email addresse er allerede i brug.";
      $_SESSION['newName'] = $name;
      $_SESSION['newEmail'] = $email;
      header("location: ../pages/login.php?signup=false");
   }
}