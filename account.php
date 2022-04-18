
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
        
      <header class="header">
        <nav class="navbar navbar-default" id="sticker">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="./img/company-logo.png" alt=""/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="cars.php">Car Listing</a></li>
                  <li><a href="about-us.php">About Us</a></li>
                  <li><a href="contact-us.php">Contact Us</a></li>
                </li>
                    <li class="login-register-link right-side-link logout"><a href="apis/logout.php">
                            <i class="icon_close_alt"></i>Logout</a>
                    </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header> 
        <!-- end header -->

        <!-- Body Content -->
        <h1 style="text-align:center">Profile Page</h1>
        
    <div class="account-div">
        <?php
            if($_SESSION["userid"]){
                print "<h2>Welcome back ". $account["name"]."</h2>";
            }
        ?>
      <h4 class="account-info">Account Information: </h4>
      <h3 class="info">Name:</h3> <?php print $account['name']; ?>
      <h3 class="info">E-mail:</h3> <?php print $account['email']; ?>
      <h3 class="info">Phone Number:</h3> <?php print $account['phone_number']; ?>
      <h3 class="info">Username:</h3> <?php print $account['username']; ?><br>
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