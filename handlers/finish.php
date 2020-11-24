<?php
// Start session
session_start();

// Reset session variable
$_SESSION['at_sea'] = false;

// Redirect to index with GET to reset javascript sessionStorage
header("location: ../index.php?finished=true");