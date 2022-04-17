<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turbo | About us</title>
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
      <div class="rq-page-content">
        <div class="inner-page-banner" style="background: url('img/inner-banner/about-us.jpg') top center no-repeat; background-size: cover;">
          <div class="rq-overlay"></div>
          <div class="container">
            <div class="rq-title-container bredcrumb-title">
              <h2 class="rq-title">About Us</h2>
              <ol class="breadcrumb rq-subtitle">
                <li><a href="index.php">Home</a></li>
                <li class="active">About Us</li>
              </ol>
            </div>
          </div>
        </div> <!-- /. inner pagebanner -->
        <div class="rq-content-block">
          <div class="rq-about-us-content-wrapper">
            <div class="container">
              <div class="about-us-content-single">
                <div class="row">
                  <div class="col-md-4">
                    <h2 class="brand-title">The Brand<span class="dot">.</span></h2>
                  </div>
                  <div class="col-md-8">
                    <div class="about-us-text">
                      <p><strong>We want to make renting a car as simple and personal as driving your own.</strong></p>
                      <p>
                        Renting a car brings you freedom, and we'll help you find the right car for you
                        at a great price. But there's much more to us than that.
                        We're here to make renting a car a lot less of a hassle.
                      </p>
                      
                    </div>
                  </div>
                </div>
              </div> <!-- end of brand -->
              <div class="about-us-content-single"> <!-- start of contact info -->
                <div class="row">
                  <div class="col-md-4">
                    <h2 class="brand-title">Contact Us<span class="dot">.</span></h2>
                  </div>
                  <div class="col-md-8">
                    <div class="contact-single">
                      <i class="icon_pin"></i>
                      <p>491 Achrafieh St. Beirut, Lebanon</p>
                    </div>
                    <div class="contact-single">
                      <i class="icon_mail_alt"></i>
                      <p>customer-service@turbome.com</p>
                    </div>
                    <div class="contact-single">
                      <i class="icon_phone"></i>
                      <p>+961 81 694 185</p>
                    </div>
                    <div class="opening-hour">
                      <p> WORKING HOURS:  <span> MONDAY - FRIDAY  /  08AM - 05PM</span></p>
                    </div>
                  </div>
                </div>
              </div> <!-- end of contact info -->
              <div class="about-us-content-single"> <!-- start of our team -->
                <div class="row">
                  <div class="col-md-4">
                    <h2 class="brand-title">Our Team<span class="dot">.</span></h2>
                  </div>
                  <div class="col-md-8">
                    <div class="rq-team-members">
                      <div class="row">
                        <div class="col-md-4 col-sm-6">
                          <div class="member-single"
                               style="background: url('img/about-us/team1.png') top center no-repeat; background-size: cover;">
                            <div class="member-info">
                              <a href="#">Badr Abadi</a>
                              <p>Co-founder</p>
                              <ul class="list-unstyled social-list">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_dribbble"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="member-single"
                               style="background: url('img/about-us/team2.png') top center no-repeat; background-size: cover;">
                            <div class="member-info">
                              <a href="#">Rashid Abdullah</a>
                              <p>Co-founder</p>
                              <ul class="list-unstyled social-list">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_dribbble"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="member-single"
                               style="background: url('img/about-us/team3.png') top center no-repeat; background-size: cover;">
                            <div class="member-info">
                              <a href="#">Malak Atwi</a>
                              <p>Co-founder</p>
                              <ul class="list-unstyled social-list">
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_dribbble"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="member-single" >
                            <img src="img/about-us/about-us-join-team.png" alt=""/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- end of our team -->
            </div>
          </div>
        </div>
      </div>

    </div> <!-- end #main-wrapper -->
        <!-- Adding footer -->
        <?php
          include("footer.php")
        ?>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
  </body>
</html>