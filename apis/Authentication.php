<?php

include "connection.php";

$statusMessage = "";
$add = 0;

if (isset($_POST["register"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $sql = " SELECT * FROM user WHERE email='" . $email . "' OR username='" . $username . "'";
    $result = $connection->query($sql);

    $user = $result->fetch_array();

    if ($user) {
        $statusMessage = "User Already Existed";
        $added = 0;
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insert_query = $connection->prepare("INSERT INTO `user`(`name`, `username`, `email`, `password`, `phone_number`) VALUES (?, ?, ?, ?, ?)");
        $insert_query->bind_param("ssssi", $name, $username, $email, $hashedPassword, $phone);

        if (!$insert_query->execute()) {
            $statusMessage = $connection->error;
            $added = 0;
        } else {
            $statusMessage = "User Registered Successfully";
            $added = 1;
        }
    }
}


if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];


}
?>