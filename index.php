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
    <div id="main-wrapper">
      <header class="header">
        <div class="header-body" >
          <!-- <video autoplay muted loop>
            <source src= "./img/Information/Cars-coming.mp4" >
          </video>   -->
          <div class="header-overlay"></div>
          <div class="container">
            <h1>Turbo. helps you</h1>
            <p>Rent a car in over 15 cities in the Middle East.</p>
            <div class="rq-search-container">
              <div class="rq-search-single">
                <div class="rq-search-content">
                  <span class="rq-search-heading">Location</span>
                  <select name="categories" class="category-option">
                    <option value="0">Pick a location</option>
                    <option value="1">Manama, Bahrain</option>
                    <option value="2">Cairo, Egypt</option>
                    <option value="3">Alexandria, Egypt</option>
                    <option value="4">Sharm El Sheikh, Egypt</option>
                    <option value="5">Amman, Jordan</option>
                    <option value="6">Kuwait City, Kuwait</option>
                    <option value="7">Beirut, Lebanon</option>
                    <option value="8">Muscat, Oman</option>
                    <option value="9">Doha, Qatar</option>
                    <option value="10">Riyadh, Saudi Arabia</option>
                    <option value="11">Jeddah, Saudi Arabia</option>
                    <option value="12">Medina, Saudi Arabia</option>
                    <option value="13">Ankara, Turkey</option>
                    <option value="14">Istanbul, Turkey</option>
                    <option value="15">Abu Dhabi, United Arab Emirates</option>
                    <option value="16">Dubai, United Arab Emirates</option>
                  </select>
                </div>
              </div>
              <div class="rq-search-single">
                <div class="rq-search-content">
                  <span class="rq-search-heading">Pick up</span>
                  <input type="text" name="datefilter" class="rq-form-element datepicker" id="startdate" placeholder="Pick up date"/>
                  <i class="ion-chevron-down datepicker-arrow"></i>
                </div>
              </div>
              <div class="rq-search-single">
                <div class="rq-search-content">
                  <span class="rq-search-heading">Return</span>
                  <input type="text" name="datefilter" class="rq-form-element" id="enddate" placeholder="Return date"/>
                  <i class="ion-chevron-down datepicker-arrow"></i>
                </div>
              </div>
              <div class="rq-search-single">
                <div class="rq-search-content last-child">
                  <span class="rq-search-heading">Driver age</span>
                  <select name="categories" class="category-option">
                    <option value="0">18-21 Years Old</option>
                    <option value="1">22-25 Years Old</option>
                    <option value="2">25+ Years old</option>
                  </select>
                </div>
              </div>
              <div class="rq-search-single search-btn">
                <div class="rq-search-content">
                  <button class="rq-btn rq-btn-primary fluid-btn">Search <i class="arrow_right"></i></button>
                </div>
              </div>
            </div>
            <!-- / .search-container -->
            <div class="rq-counting-list">
              <ul class="list-unstyled">
                <li>
                  <span class="count-result" data-from="25" data-to="12460" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="count-category">User access</span>
                </li>
                <li>
                  <span class="count-result" data-from="25" data-to="8960" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="count-category">Cars</span>
                </li>
                <li>
                  <span class="count-result" data-from="25" data-to="10360" data-speed="5000" data-refresh-interval="50"></span>
                  <span class="count-category">Reviews</span>
                </li>
              </ul>
            </div>

          </div>
        </div> <!-- /.header-body -->
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
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="contact-us.html">Contact us</a></li>
                </li>
                  <?php if (isset($userid)){ ?>
                      <li class="login-register-link right-side-link"><a href="account.php">
                              <i class="icon_profile"></i>Account</a>
                      </li>
                  <?php } else { ?>
                      <li class="login-register-link right-side-link"><a href="registration.php">
                              <i class="icon_lock-open_alt"></i>Login</a>
                      </li>
                  <?php } ?>
                <!-- <li class="dropdown right-side-link">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                             aria-haspopup="true" aria-expanded="false">ENG<span class="ion-chevron-down"></span></a>
                  <ul class="dropdown-menu with-language">
                    <li><a href="#">Fr</a></li>
                    <li><a href="#">De</a></li>
                  </ul>
                </li>
                <li class="dropdown right-side-link last">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                                             aria-haspopup="true" aria-expanded="false">USD<span class="ion-chevron-down"></span></a>
                  <ul class="dropdown-menu with-language">
                    <li><a href="#">USD</a></li>
                    <li><a href="#">Eur</a></li>
                  </ul>
                </li> -->
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header> <!-- end header -->

      <div class="rq-page-content">
        <div class="rq-content-block gray-bg">
          <span class="bg-large-text">Turbo</span>
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
                          <a href="#">Rashid Abdullah | Malak Atwi | Badr Abadi</a>
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
              <a href="#">Browse All Cars <i class="ion-ios-arrow-right"></i></a>
            </div>
          </div>
        </div> <!-- /.content block -->
        <div class="rq-content-block with-border-bottom vertical-line">
          <div class="rq-car-listing-tab">
            <ul class="nav nav-tabs parent-tab" role="tablist">
              <li role="presentation" class="active">
                <a href="#top-popular"  role="tab" data-toggle="tab">Top Popular</a></li>
              <li role="presentation">
                <a href="#new-cars"  role="tab" data-toggle="tab">New Cars</a></li>
              <li role="presentation">
                <a href="#sale-off"  role="tab" data-toggle="tab">Sale Off</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="top-popular">
                <div class="child-tab-wrapper">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#car-one"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail1.jpg" alt="">
                        <span class="tittle">Lamborghini Aventado 2012</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$39.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-two"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail2.jpg" alt="">
                        <span class="tittle">Ford Red Sport Car</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$29.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-three"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail3.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-four"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail1.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-five"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail2.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="car-one">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Lamborghini Aventado</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg"></div>
                          <img src="img/tab-image/full-img1.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.0</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-two">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Ford Red Sport Car</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg ford"></div>
                          <img src="img/tab-image/full-img2.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.0</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-three">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Kia Rio White Car 2016</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg kia"></div>
                          <img src="img/tab-image/full-img3.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.0</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-four">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Kia Rio White Car 2016</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg kia"></div>
                          <img src="img/tab-image/full-img3.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.0</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-five">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Kia Rio White Car 2016</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg kia"></div>
                          <img src="img/tab-image/full-img3.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                  </div>
                </div> <!-- /.child-tab-wrapper -->
              </div>

              <div role="tabpanel" class="tab-pane fade" id="new-cars">
                <div class="child-tab-wrapper">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation">
                      <a href="#car-two-new"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail2.jpg" alt="">
                        <span class="tittle">Ford Red Sport Car</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$29.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation" class="active">
                      <a href="#car-one-new"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail1.jpg" alt="">
                        <span class="tittle">Lamborghini Aventado 2012</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$39.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-three-new"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail3.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-four-new"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail1.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-five-new"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail2.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="car-one-new">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Lamborghini Aventado</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg"></div>
                          <img src="img/tab-image/full-img1.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-two-new">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Ford Red Sport Car</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg ford"></div>
                          <img src="img/tab-image/full-img2.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-three-new">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Kia Rio White Car 2016</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg kia"></div>
                          <img src="img/tab-image/full-img3.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-four-new">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Kia Rio White Car 2016</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg kia"></div>
                          <img src="img/tab-image/full-img3.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-five-new">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Kia Rio White Car 2016</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg kia"></div>
                          <img src="img/tab-image/full-img3.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                  </div>
                </div> <!-- /.child-tab-wrapper -->

              </div>

              <div role="tabpanel" class="tab-pane fade in" id="sale-off">
                <div class="child-tab-wrapper">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#car-one-sale"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail1.jpg" alt="">
                        <span class="tittle">Lamborghini Aventado 2012</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$39.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-two-sale"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail2.jpg" alt="">
                        <span class="tittle">Ford Red Sport Car</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$29.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-three-sale"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail3.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-four-sale"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail1.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#car-five-sale"  role="tab" data-toggle="tab">
                        <img src="img/tab-image/thumbnail2.jpg" alt="">
                        <span class="tittle">Kia Rio White Car 2016</span>
                        <span class="car-des">Four Seater Car</span>
                        <span class="rent-price">$27.00<b>/Day</b></span>
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="car-one-sale">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Lamborghini Aventado</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg"></div>
                          <img src="img/tab-image/full-img1.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-two-sale">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Ford Red Sport Car</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg ford"></div>
                          <img src="img/tab-image/full-img2.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="car-three-sale">
                      <div class="rq-tab-car-details">
                        <div class="car-logo">
                          <img src="img/partner-logo/partner3.png" alt="">
                        </div>
                        <h3>Kia Rio White Car 2016</h3>
                        <div class="large-image-wrapper">
                          <div class="image-bg kia"></div>
                          <img src="img/tab-image/full-img3.png" alt="">
                        </div>
                        <div class="car-details-option">
                          <span><i class="ion-briefcase"></i>2 large bags</span>
                          <span><i class="ion-no-smoking"></i>No smoking</span>
                          <span><i class="ion-speedometer"></i>08/12 mpg</span>
                          <span>Starting at <span class="red-section">$39.00</span>/day</span>
                        </div>
                      </div> <!-- /.rq-tab-car-details -->
                    </div>
                  </div>
                </div> <!-- /.child-tab-wrapper -->
              </div>
            </div> <!-- /.tab-content -->
          </div> <!-- /.rq-car-listing-tab -->
        </div> <!-- /.content block -->
        <div class="rq-content-block gray-bg">
          <div class="container">
            <div class="rq-partners-section">
              <div class="partners-wrapper">
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner1.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner3.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner2.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner4.png" alt=""></a></div>
                <div class="partner-single"><a href="#"><img src="img/partner-logo/partner5.png" alt=""></a></div>
              </div>
            </div> <!-- /.rq-partners-section -->
            <!-- <div class="rq-testimonial-section">
              <div class="rq-testimonial-content">
                <h1 class="rq-title">What Client Say<span class="rq-dot">.</span></h1>
                <div class=" owl-carousel testimonial-wrapper">
                  <div class="item">
                    <p class="testimoinal-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    Pellentesque  eueget ante venenatis euismod. Etiam in odio mattis, suscipit ex sit amet, toronil inoui bibenidum risus.

                    </p>
                    <span class="author-name-title">
                      <img src="img/testimoianl1.png" alt="">
                      <a href="#">Adam Levine <i class="ion-ios-minus-empty"></i>
                        <span>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                        </span>
                      </a>
                    </span>

                  </div>
                  <div class="item">
                    <p class="testimoinal-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    Pellentesque  eueget ante venenatis euismod. Etiam in odio mattis, suscipit ex sit amet, toronil inoui bibenidum risus.
                    </p>
                    <span class="author-name-title">
                      <img src="img/testimoianl1.png" alt="">
                      <a href="#">Adam Levine <i class="ion-ios-minus-empty"></i>
                        <span>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                        </span>
                      </a>
                    </span>

                  </div>
                  <div class="item">
                    <p class="testimoinal-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    Pellentesque  eueget ante venenatis euismod. Etiam in odio mattis, suscipit ex sit amet, toronil inoui bibenidum risus.
                    </p>
                    <span class="author-name-title">
                      <img src="img/testimoianl1.png" alt="">
                      <a href="#">Adam Levine <i class="ion-ios-minus-empty"></i>
                        <span>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                        </span>
                      </a>
                    </span>

                  </div>
                  <div class="item">
                    <p class="testimoinal-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                    Pellentesque  eueget ante venenatis euismod. Etiam in odio mattis, suscipit ex sit amet, toronil inoui bibenidum risus.
                    </p>

                    <span class="author-name-title">
                      <img src="img/testimoianl1.png" alt="">
                      <a href="#">Adam Levine <i class="ion-ios-minus-empty"></i>
                        <span>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                          <i class="ion-android-star"></i>
                        </span>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div> /.testimonial section -->

            <!-- <div class="rq-tips-tricks">
              <h1 class="rq-title">Tips &amp; Tricks<span class="rq-dot"></span></h1>
              <div class="row">
                <div class="col-md-4">
                  <div class="rq-tips-single wow fadeInLeft" data-wow-duration="500ms">
                    <div class="image-container">
                      <img src="img/tips/tips1.jpg" alt="">
                    </div>
                    <div class="tips-content">
                      <span class="date">March, 24th, 2016</span>
                      <h4><a href="#">Rent A Car So Easiest With A Few Minutes From Turbo</a></h4>
                      <a class="rq-btn rq-btn-normal continue-button" href="#">Continue Reading <i class="arrow_right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="rq-tips-single wow fadeInUp" data-wow-duration="500ms">
                    <div class="image-container">
                      <img src="img/tips/tips2.jpg" alt="">
                    </div>
                    <div class="tips-content">
                      <span class="date">March, 15th, 2016</span>
                      <h4><a href="#">Experience awesome travel on Mazda of Selena</a></h4>
                      <a class="rq-btn rq-btn-normal continue-button" href="#">Continue Reading <i class="arrow_right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="rq-tips-single wow fadeInRight" data-wow-duration="500ms">
                    <div class="image-container">
                      <img src="img/tips/tips3.jpg" alt="">
                    </div>
                    <div class="tips-content">
                      <span class="date">February, 08th, 2016</span>
                      <h4><a href="#">Have A Great Pinic On Moutain With Your Family In Last Week</a></h4>
                      <a class="rq-btn rq-btn-normal continue-button" href="#">Continue Reading <i class="arrow_right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div> <!-- /.content block -->
        <div class="rq-call-to-action">
          <div class="container">
            <h2>Need help renting online? <span>+961 81 694 185</span></h2>
          </div>
        </div>
      </div> <!-- /.page-content -->
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
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact-us.html">Help</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <ul class="address">
                    <li><a href="about-us.html">Our Location</a></li>
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.rq-main-footer -->

      <div class="rq-copyright-section">
        <div class="container">
          <div class="copyright-content">
            <p><a href="#"><img src="img/company-logo.png" alt=""></a> © 2016 <a href="index.php">Turbo, Inc</a>.</p>
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
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/scripts.js" ></script>
  </body>
</html>