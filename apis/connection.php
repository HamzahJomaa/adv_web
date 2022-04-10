<?php
session_start();

$server = "localhost";
$username_db = "root";
$password_db = "root";
$db = "turbodb";
$port = 80;

$connection = new mysqli($server,$username_db,$password_db,$db,$port);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


?>