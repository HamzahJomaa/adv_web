<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
 include "connection.php";

 $booking = $_POST["booking"];
 $user = $_POST["user"];
 $car = $_POST["car"];
 $checkin = $booking["checkin"];
 $checkout = $booking["checkout"];
 $total = $booking["total"];
 $days = $booking["days"];

 unset($booking["checkin"]);
 unset($booking["checkout"]);
 unset($booking["total"]);
 unset($booking["days"]);
 $json = json_encode($booking,true);


 $insert_query = $connection->prepare("INSERT INTO `booking`(`userid`, `carid`, `checkin`, `checkout`, `price`, `addons`,`days`) VALUES (?,?,?,?,?,?,?)");
 $insert_query->bind_param("iissdsi", $user,$car,$checkin,$checkout,$total,$json,$days);

 if (!$insert_query->execute()) {
  $statusMessage = $connection->error;
  echo $statusMessage;
  $added = 0;
  header('Temporary-Header: True', true, 400);
  print json_encode (array ('error' => 400, 'message' => $statusMessage));
 } else {
  $statusMessage = "User Registered Successfully";
  $added = 1;
  header('Temporary-Header: True', true, 200);
 }
}


?>