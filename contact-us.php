<?php include "apis/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
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

      <div class="inner-page-banner" style="background: url('img/inner-banner/contact-us.jpg') top center no-repeat; background-size: cover;">
        <div class="rq-overlay"></div>
        <div class="container">
          <div class="rq-title-container bredcrumb-title text-center">
            <h2 class="rq-title">Contact Us</h2>
            <ol class="breadcrumb rq-subtitle">
              <li><a href="index.php">Home</a></li>
              <li class="active">Contact Us</li>
            </ol>
          </div>
        </div>
      </div> <!-- /. inner pagebanner -->
      <div class="rq-page-content">
        <div class="rq-content-block">
          <div class="container">
          </div> <!-- /. inner pagebanner -->
          <div class="rq-page-content">
            <div class="rq-content-block">
              <div class="container">
                <div class="rq-contact-us-grid-block"> <!-- start info portion -->
                  <div class="row">
                    <div class="col-md-4">
                      <div class="grid-block-single">
                        <i class="icon_mobile"></i>
                        <h3>Phone</h3>
                        <p>Phone: +961 81 694 185</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="grid-block-single">
                        <i class="icon_pin_alt"></i>
                        <h3>Address</h3>
                        <p>5th Floor, AH Building 491 Achrafieh St. </p>
                        <p>Beirut, Lebanon</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="grid-block-single">
                        <i class="icon_mail_alt"></i>
                        <h3>Email</h3>
                        <p>customerservice.turbo@gmail.com</p>
                        <p>info@turbome.com</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- end info portion -->

            <div class="rq-contact-us-form-content"> <!-- start message form -->
              <h3>If you have any questions <br>please do not hesitate to send us a message</h3>
              <form action="https://formsubmit.co/customerservice.turbo@gmail.com">
                <input type="text" class="contact-form-input" placeholder="Your name">
                <input type="email" class="contact-form-input" placeholder="Your email">
                <input type="text" class="contact-form-input" placeholder="Subject">
                <textarea class="contact-form-input" placeholder="Message"></textarea>
                <div class="submit-btn">
                  <button type="submit" class="rq-btn rq-btn-primary">Send Message</button>
                </div>
              </form>
            </div> <!-- end message form -->
            <div class="rq-contact-us-map"> <!-- start map portion -->
              <div id="map"></div>
            </div> <!-- end map portion -->
          </div>
        </div>
      </div>
    </div> <!-- end #main-wrapper -->
      <!-- Adding Footer -->
      <?php
        include("footer.php")
      ?>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsPTEcgKkdos0MAoBi65IVJvoNAl9HzSI&callback=initMap"> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0QI6vd531_4xsTobCg_J1_6BZOEolRbs&libraries=visualization&callback=initMap">
    </script>
    <script src="js/customMap.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
  </body>
</html>
