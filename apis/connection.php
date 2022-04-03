<?php

$server = "db-mysql-nyc3-05704-do-user-10544311-0.b.db.ondigitalocean.com";
$username_db = "doadmin";
$password_db = "wpitp2pT8Ji2wjJo";
$db = "turbodb";
$port = 25060;

$connection = new mysqli($server,$username_db,$password_db,$db,$port);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
// anything
?>