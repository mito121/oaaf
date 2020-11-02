<?php
$dbServer = 'mysql82.unoeuro.com';
$dbUser = 'webnation_dk';
$dbPass = 'M011yhund';
$dbName = 'webnation_dk_db';

$conn = new mysqli($dbServer, $dbUser, $dbPass, $dbName);
        if ($conn->connect_error){
            die('Database connection failed: ' . $conn->connect_error);
        }
$conn->set_charset('UTF8');
