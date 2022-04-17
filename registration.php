<?php
include "apis/Authentication.php";

$userid = $_SESSION["userid"];

if (isset($userid)){
    header("Location: ./");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registartion</title>
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
        <?php include "partials/header.php"; ?>
      <div class="rq-page-content">
        <div class="rq-content-block">
          <div class="rq-title-container bredcrumb-title small">
            <div class="container">
              <h2 class="rq-title">Register</h2>
              <ol class="breadcrumb rq-subtitle">
                <li><a href="index.php">Home</a></li>
                <li class="active">Register</li>
              </ol>
            </div>
          </div>
          <div class="rq-registration-content-single"> <!-- start of login form portion -->
            <div class="container">
              <h4>Login to your account</h4>
              <p class="subtitle">Login to your account to unlock extra offers.</p>
              <div class="rq-login-form">
                <form action="#" method="POST">
                  <div class="row">
                    <div class="col-md-5">
                      <input type="text" name="email" class="rq-form-control" placeholder="Email or Username">
                    </div>
                    <div class="col-md-5">
                      <input type="password" name="password" class="rq-form-control"  placeholder="Password">
                    </div>
                    <div class="col-md-2">
                      <button type="submit" name="login" class="rq-btn rq-btn-primary fluid border-radius">Login <i class="arrow_right"></i></button>
                    </div>
                      <div class="col-md-12">
                          <h4 style="color: red"><?php echo $loginMessage; ?></h4>
                      </div>
                    <div class="col-md-12">
                      <div class="rq-checkbox">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="remember-me">
                        <span class="rq-checkbox">
                          <input type="checkbox" id="remember-me">
                          <label for="remember-me">Keep me logged in</label>
                        </span>
                        <span class="forgotpass">
                          <a href="#">Forgot your password?</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="social-login"> <!-- start social icon div -->
                  <h5>or login with</h5>
                  <ul class="social-page-nav">
                    <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                    <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                    <li><a href="#" class="gp"><i class="social_googleplus"></i></a></li>
                    <li><a href="#" class="ln"><i class="social_linkedin"></i></a></li>
                    <li><a href="#" class="rs"><i class="social_rss"></i></a></li>
                  </ul>
                </div> <!-- end social icon div -->
              </div> <!-- end login div -->
            </div>
          </div> <!-- end of login form portion -->
          <div class="rq-registration-content-single small-bottom-margin"> <!-- start of registration portion -->
            <div class="container">
              <div class="rq-login-form no-border">
                <h4>Don't have an account? Register now! </h4>
                <p>It takes less than 5 minutes to unlock all our special features!</p>
                <h5>SIGN UP TODAY AND YOU WILL BE ABLE TO FOLLOWING</h5>
                <ul class="rq-feature-list">
                  <li>Register and access all offers</li>
                  <li>Change and update your profile anytime</li>
                  <li>Keep records of all your payments</li>
                  <li>Track your car easily on your profile</li>
                </ul>
                <form class="form-horizontal"  action="#" method="post" >
                  <div class="row">
                    <div class="col-md-4">
                      <input type="text" class="rq-form-control reverse" name="name" placeholder="Name" required>
                    </div>
                  <div class="col-md-4">
                    <input type="text" class="rq-form-control reverse" name="username" placeholder="Username" required>
                  </div>
                  <div class="col-md-4">
                    <input type="password" class="rq-form-control reverse" name="password" placeholder="Password" required>
                  </div>
                  <div class="col-md-4">
                    <input type="email" class="rq-form-control reverse" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="col-md-4">
                    <input type="text" class="rq-form-control reverse" name="phone" placeholder="Phone" required>
                  </div>
                  <div class="col-md-4">
                    <input type="password" class="rq-form-control reverse" name="cpassword" placeholder="Confirm Password" required>
                  </div>
                      <div class="col-md-12">
                          <h4 style="color: <?php echo $added? "green":"red"; ?> "> <?php echo $statusMessage; ?> </h4>
                      </div>
                  <div class="col-md-12">
                    <div class="register-button">
                      <button type="submit" name="register" class="rq-btn rq-btn-primary border-radius">Register <i class="arrow_right"></i></button>
                    </div>
                  </div>
                  </div> <!-- end of registration section -->
                </form>
                <div class="social-login"> <!-- start social icon div -->
                  <h5>or register with</h5>
                  <ul class="social-page-nav">
                    <li><a href="#" class="fb"><i class="social_facebook"></i></a></li>
                    <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                    <li><a href="#" class="gp"><i class="social_googleplus"></i></a></li>
                    <li><a href="#" class="ln"><i class="social_linkedin"></i></a></li>
                    <li><a href="#" class="rs"><i class="social_rss"></i></a></li>
                  </ul>
                <!-- </div> end social icon div -->

              </div>
            </div>
          </div><!--  end of registration form portin -->
        </div>
      </div>
    </div> <!-- end #main-wrapper -->
    <footer class="rq-footer">
      <div class="rq-main-footer">
        <div class="container">
          <button class="toggle-widget">Footer widget</button>
          <div class="footer-widget">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <ul>
                    <!-- <li><a href="#">Site map</a></li> -->
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact-us.html">Help</a></li>
                    <!-- <li><a href="#">Affiliate</a></li> -->
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <ul class="address">
                    <li><a href="about-us.html">Our Location</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <!-- <div class="widget-list">
                  <ul class="address">
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Car Blog</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">Press</a></li>
                  </ul>
                </div> -->
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <div class="rq-newsletter">
                    <h5>Sign up for get our newsletter</h5>
                    <form action="#">
                      <input class="fq-newsletter-form" type="text" placeholder="Your Email...">
                      <button class="rq-btn" type="submit"><i class="ion-android-send"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.rq-main-footer -->
      <div class="rq-copyright-section">
        <div class="container">
          <div class="copyright-content">
            <p><a href="#"><img src="img/company-logo.png" alt=""></a> © 2016 <a href="#">Turbo, Inc</a>.</p>
            <ul class="list-unstyled social-list">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
          </div>
        </div>
      </div> <!-- /.rq-copyright-section -->
    </footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
  </body>
</html>