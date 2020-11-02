<?php

session_start();
require_once '../includes/dbconnect.php';

if (isset($_POST)) {
   $email = $conn->real_escape_string($_POST['email']);
   $password = $conn->real_escape_string($_POST['password']);

   $sql = "SELECT `id`, `password`, `name`, `time_at_sea`, `trips`, `fb_id` FROM `oaaf_users` WHERE email = '$email'";
   $result = $conn->query($sql);

   if (mysqli_num_rows($result) > 0) {
      while ($obj = $result->fetch_object()) {
         $hash = $obj->password;

         if (password_verify($password, $hash)) { // success
            $_SESSION['logged'] = true;
            $_SESSION['id'] = $obj->id;
            $_SESSION['name'] = $obj->name;
            $_SESSION['time_at_sea'] = $obj->time_at_sea;
            $_SESSION['trips'] = $obj->trips;
            $_SESSION['fb_id'] = $obj->fb_id;
            header("location: ../index.php");
         } else {
            header("location: ../pages/login.php?login=false"); // wrong password
         }
      }
   } else {
      header("location: ../pages/login.php?login=false"); // email doesnt exist
   }
}