<?php
// Start session
session_start();

$_SESSION['at_sea'] = false;
$_SESSION['started'] = '';

header("location: ../index.php");