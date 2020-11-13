<?php
// Start session
session_start();

// redirect unlogged users from login protected pages
require_once "includes/protect.php";
// get header
require_once "includes/header.php";

$page = '';

// get full page path
$page = (isset($_GET['page'])) ? "pages/" . $_GET['page'] . '.php' : 'pages/scanner.php';

// get page name only without extension
$pageName = (isset($_GET['page'])) ? $_GET['page'] : 'scanner';


// if page doesnt exist, redirect to 404
if (file_exists($page)) {
    include_once( $page );
} else {
    include_once 'pages/error404.php';
}

// get footer
require_once 'includes/footer.php';
