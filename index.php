<?php

// Start session
session_start();

// check if user has started a trip
if (isset($_GET['page']) && $_GET['page'] === 'timer' && $_SESSION['at_sea'] !== true) {
    $_SESSION['at_sea'] = true;
}

// redirect unlogged users from login protected pages
require_once "includes/protect.php";
// get header
require_once "includes/header.php";

$page = '';

// get full page path
if ($_SESSION['at_sea'] === true) { // If user is currently at sea
    $page = (isset($_GET['page'])) ? "pages/" . $_GET['page'] . '.php' : 'pages/timer.php';
} else { // If user is NOT currently at sea
    $page = (isset($_GET['page'])) ? "pages/" . $_GET['page'] . '.php' : 'pages/scanner.php';
}

// get page name only without extension
if ($_SESSION['at_sea'] === true) { // If user is currently at sea
    $pageName = (isset($_GET['page'])) ? $_GET['page'] : 'timer';
} else {
    $pageName = (isset($_GET['page'])) ? $_GET['page'] : 'scanner';
}

// Reset sessionStorage 'trip_started' if user has finished a trip
if(isset($_GET) && $_GET['finished'] == 'true'){
    echo '<script>window.sessionStorage.removeItem("trip_started");</script>';
}

// if page doesnt exist, redirect to 404
if (file_exists($page)) {
    include_once( $page );
} else {
    include_once 'pages/error404.php';
}

// get footer
require_once 'includes/footer.php';
