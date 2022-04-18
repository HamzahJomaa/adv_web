
<?php
require "apis/connection.php";
$userid = $_SESSION["userid"];

$account_info= "SELECT * FROM user where userid = '". $userid ."'";
$result_account = $connection->query($account_info);
$account = $result_account->fetch_array();

if(count($_POST)>0) {
    $result = mysqli_query($con,"SELECT *from user WHERE userid='" . $userid . "'");
    $row=mysqli_fetch_array($result);
    if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
    mysqli_query($con,"UPDATE user set password='" . $_POST["newPassword"] . "' WHERE userid='" . $userid . "'");
    $message = "Password Changed Sucessfully";
    } else{
     $message = "Password is not correct";
    }}
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
        <!-- Adding Header -->
            <?php
            include("header.php")
            ?>
        <!-- end header -->

        <!-- Body Content -->
        <h1 style="text-align:center">Edit Profile</h1>
        
    <div class="account-div">
        <?php
            if($_SESSION["userid"]){
                print "<h2>Welcome back ". $account["name"]."</h2>";
            } 
        ?>
      <h4 class="account-info">Edit Account Information: </h4>
      <h3 class="info">Name:</h3> <?php print $account['name']; ?>
      <h3 class="info">E-mail:</h3> <?php print $account['email']; ?>
      <h3 class="info">Phone Number:</h3> <?php print $account['phone_number']; ?>
      <h3 class="info">Username:</h3> <?php print $account['username']; ?><br>
    </div>
    <br><br>
    <div class="account-div">
    <h3>CHANGE PASSWORD</h3>
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <form method="post" action="#">
            Current Password:<br>
            <input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
            <br>
            New Password:<br>
            <input type="password" name="newPassword"><span id="newPassword" class="required"></span>
            <br>
            Confirm Password:<br>
            <input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
            <br><br>
            <input type="submit">
        </form>
        </div>
<!-- ------------------------------------ -->

        <!-- Adding footer -->
        <?php
          include("footer.php")
        ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
  </body>
</html>