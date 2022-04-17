<?php
require "apis/connection.php";
$userid = $_SESSION["userid"];
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
              <div class="rq-content-block gray-bg" id="services">
          <div class="rq-title-container text-center">
            <h2 class="rq-title no-padding">Our <strong>Top </strong>Cars.</h2>
          </div>
          <div class="rq-how-it-work-content">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="how-it-work-single" style="box-shadow: 0 24px 34px -14px rgba(0, 0, 0, .3);">
                    <img src="img/cars/elentra-front-side-view.jpg" alt="" style="width: 250px; height: 150px; justify-content: center;">
                    <a href="cars.php"><h4>Sedans</h4></a>
                    <p>Hyundai Elantra</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="how-it-work-single" style="box-shadow: 0 24px 34px -14px rgba(0, 0, 0, .3);">
                    <img src="img/cars/crv-front-side-view2.jpg" alt="" style="width: 250px; height: 150px; justify-content: center;">
                    <a href="cars.php"><h4>SUVs</h4></a>
                    <p>Honda CR-V</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="how-it-work-single" style="box-shadow: 0 24px 34px -14px rgba(0, 0, 0, .3);">
                    <img src="img/cars/ford-front-view.jpg" alt="" style="width: 250px; height: 150px; justify-content: center;">
                    <a href="cars.php"><h4>Sports Cars</h4></a>
                    <p>Ford GT 500</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <a href="cars.php">Browse All Cars <i class="ion-ios-arrow-right"></i></a>
            </div>
          </div>
          <div class="rq-content-block gray-bg" id="services">
          <div class="rq-title-container text-center">
            <h2 class="rq-title no-padding">How it <strong>Works.</strong></h2>
          </div>
          <div class="rq-how-it-work-content">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="how-it-work-single">
                    <img src="img/icon1.png" alt="">
                    <h4>Select Time<br> Pick Up & Return</h4>
                    <p>Select location, pick up time, return and car type</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="how-it-work-single">
                    <img src="img/icon2.png" alt="">
                    <h4>find all<br>cars near you</h4>
                    <p>Find all our available cars for rent near your current lo</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="how-it-work-single">
                    <img src="img/icon3.png" alt="">
                    <h4>pick a car<br>and enjoy your trip</h4>
                    <p>Pick a car that you want<br>and enjoy your trip</p>
                  </div>
                </div>
              </div>
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