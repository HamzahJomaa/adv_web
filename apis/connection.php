<?php

$server = "db-mysql-nyc3-05704-do-user-10544311-0.b.db.ondigitalocean.com";
$username = "doadmin";
$password = "wpitp2pT8Ji2wjJo";
$db = "turbodb";
$port = 25060;

$connection = new mysqli($server,$username,$password,$db,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// anything
?>