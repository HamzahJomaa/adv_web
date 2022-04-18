
<?php
// require "apis/connection.php";
// // $id = $_GET["id"];
// $userid = $_SESSION["userid"];

// if (!isset($id)) {
//  header("HTTP/1.0 404 Not Found");
//  die();
// }

require "apis/connection.php";
$userid = $_SESSION["userid"];

$account_info= "SELECT * FROM user where userid = '". $userid ."'";
$result_account = $connection->query($account_info);
$account = $result_account->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600' rel='stylesheet' type='text/css'>
    <!-- Main style -->
    <link rel="stylesheet" href="css/turbo.style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="fakeloader">
      <div class="spinner5">
        <div class="cube1"></div>
        <div class="cube2"></div>
      </div>
    </div>
    <div id="main-wrapper">
<!-- Adding Special different Header -->
        
        <?php include "header.php"; ?>

        <!-- Body Content -->
        <h1 style="text-align:center">Profile Page</h1>
        
    <div class="account-div">
        <?php if($_SESSION["userid"]){ echo "<h2>Welcome back ". $account["name"]."</h2>";} ?>
        <h4 class="account-info">Account Information: </h4>
        <div class="account-field"> <h3 class="info">Name:</h3> <?php print $account['name']; ?> </div>
        <div class="account-field"> <h3 class="info">Email Address:</h3> <?php print $account['email']; ?> </div>
        <div class="account-field"> <h3 class="info">Phone Number:</h3> <?php print $account['phone_number']; ?> </div>
        <div class="account-field"> <h3 class="info">Username:</h3> <?php print $account['username']; ?> </div>
        <a href="account_change.php" name="updatebtn" class="rq-btn rq-btn-primary border-radius">Update Profile <i class="arrow_right"></i></a>
    </div>
    <br>
<!-- ------------------------------------ -->
        <!-- Adding footer -->
        <?php
          include("footer.php")
        ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
  </body>
</html>