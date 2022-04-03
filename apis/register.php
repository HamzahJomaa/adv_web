<?php

include "connection.php";

if (isset($_POST["register"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $insert_query = $connection->prepare("")

    echo "test";
}
die();

?>