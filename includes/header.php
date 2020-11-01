<?php
session_start();

//require_once 'includes/protect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QR Scanner Demo</title>

        <!-- ### CSS ### -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>
        <?php
        if ($_GET['page'] == 'scanner.php' || empty($_GET['page'])) {
            echo '<link rel="stylesheet" type="text/css" href="assets/css/scanner.css"/>';
        }
        ?>
    </head>
    <body>
        <header>
            <nav>
                
            </nav>
        </header>

