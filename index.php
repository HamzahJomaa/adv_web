<?php
require "apis/connection.php";
  if(isset($_SESSION["userid"])){
    $userid = $_SESSION["userid"];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turbo</title>
    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600' rel='stylesheet' type='text/css'>
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
      <!-- <video autoplay muted loop>
            <source src= "./img/Information/Cars-coming.mp4" >
          </video>   -->
            <!-- Adding Header -->
            <?php
              include("header.php")
            ?>
      <div class="rq-page-content">
        <div class="rq-content-block gray-bg">
          <!-- <span class="bg-large-text">Turbo</span> -->
          <div class="container">
            <div class="row">
              <div class="col-md-11">
                <div class="rq-mission-block">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mission-content">
                        <h1 class="rq-title">Our Mission<span class="rq-dot">.</span><i class="rq-line"></i></h1>
                        <p class="mission-text">Arranging car rentals in 10 different countries,
                            Turbo.com is the Middle East's biggest online car rental service.
                            Working with leading suppliers, we offer great prices on all car
                            groups, including luxury cars, people carriers, and automatic cars.
                            With a call center open 24 hours 7 days a week, we can find you the
                            best rental prices whenever you want, wherever you go.
                        </p>
                        <address>
                          <a href="about-us.php">Rashid Abdullah | Malak Atwi | Badr Abadi</a>
                          <cite>- CEO Founders</cite>
                        </address>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mission-image">
                        <img src="img/block-transparent-img.png" alt="">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="rq-browse-section">
              <h1 class="rq-title">Top Our Cars<span class="rq-dot">.</span></h1>
              <a href="cars.php">Browse All Cars <i class="ion-ios-arrow-right"></i></a>
            </div>
          </div>

        <!-- <div class="rq-content-block gray-bg">
          <div class="container">
            <div class="rq-partners-section">
              <div class="partners-wrapper">
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner1.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner3.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner2.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner4.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner5.png" alt=""></a></div>
              </div>
            </div>

          </div> -->
        </div> <!-- /.content block -->
        <div class="rq-call-to-action">
          <div class="container">
            <h2>Need help renting online? <span>+961 81 694 185</span></h2>
          </div>
        </div>
      </div> <!-- /.page-content -->
    </div> <!-- end #main-wrapper -->

        <!-- Adding footer -->
            <?php
              include("footer.php")
            ?>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/scripts.js" ></script>
  </body>
</html>