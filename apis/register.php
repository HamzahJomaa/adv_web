<?php

include "connection.php";

$error = "";

if (isset($_POST["register"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];



    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    $insert_query = $connection->prepare("INSERT INTO `user`(`name`, `username`, `email`, `password`, `phone_number`) VALUES (?, ?, ?, ?, ?)");
    $insert_query->bind_param("ssssi",$name,$username,$email,$hashedPassword,$phone);

    if (!$insert_query->execute()){
        $error = $connection->error;
    }
}

?>