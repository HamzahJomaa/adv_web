<?php
require "apis/connection.php";
$page = $_GET["page"];
if (!isset($page)){
  $page = 1;
}
$per_page_record = 12;
$start_from = ($page-1) * $per_page_record;     
    
$sql = "SELECT * FROM cars LIMIT $start_from, $per_page_record";

$result = $connection->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turbo | Car Listing</title>
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
      <div class="inner-page-banner" style="background: url('img/inner-banner/listing-banner.jpg') top center no-repeat; background-size: cover;">
        <div class="rq-overlay"></div>
        <div class="container">
          <div class="rq-title-container bredcrumb-title text-center">
            <h2 class="rq-title">Car Listing</h2>
            <ol class="breadcrumb rq-subtitle secondary">
              <li><a href="index.php">Home</a></li>
              <li class="active">Car Listing</li>
            </ol>
          </div>
        </div>
      </div> <!-- /. inner pagebanner -->
      <div class="rq-page-content">
        <div class="rq-content-block gray-bg small-padding-top">
          <div class="container">
            <div class="listing-search-container">
              <h2>Search For<span class="dot">.</span></h2>
              <div class="rq-search-container with-border">
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

            </div> <!-- /.search-container -->
            <div class="rq-listing-top-bar-filter-option">
              <div class="filter-list">
                <h5>Filter by</h5>
                <div class="filter-single">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Brand <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-one">
                          <label for="brand-one">Ford Shelby</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-two">
                          <label for="brand-two">BMW M6 Gran</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="brand-three">
                          <label for="brand-three">AUDI R8 2011</label>
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-single">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Class <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">

                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-a">
                          <label for="class-a">A class</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-b">
                          <label for="class-b">B class</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-c">
                          <label for="class-c">C class</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="class-d">
                          <label for="class-d">D class</label>
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-single">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Fuel <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fule-one">
                          <label for="fule-one">50 liter</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-two">
                          <label for="fuel-two">100 liter</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-three">
                          <label for="fuel-three">120 liter</label>
                        </span>
                      </li>
                      <li>
                        <span class="rq-checkbox">
                          <input type="checkbox" id="fuel-four">
                          <label for="fuel-four">130 liter</label>
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="filter-single">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Price <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="rq-pricing-slider">
                          <div id="slider-range"></div>
                          <p>
                          <label for="amount">range:</label>
                          <input type="text" id="amount">
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="rq-grid-list-view-option">
                <a class="active" href="#" data-class="rq-listing-grid"><i class="ion-grid"></i></a>
                <a href="#" data-class="rq-listing-list"><i class="ion-navicon"></i></a>
              </div>
            </div>

            <div class="rq-car-listing-wrapper">
              <div class="rq-listing-choose rq-listing-grid">
                <div class="row">
                  <?php while ($row = $result -> fetch_row()) { ?>
                    <div class="col-md-4 col-sm-6">
                      <div class="listing-single">
                        <div class="listing-img">
                          <img src="img/information/Sedans/Hyundai Elentra/elentra-front-side-view.jpg" alt="">
                        </div>
                        <div class="listing-details">
                          <h5 class="car-brand">Hyundai</h5>
                          <h3 class="car-name"><a href="#"><?php echo $row[2]; ?></a></h3>
                          <ul class="rating-list">
                            <li><i class="ion-star"></i></li>
                            <li><i class="ion-star"></i></li>
                            <li><i class="ion-star"></i></li>
                            <li><i class="ion-star"></i></li>
                            <li><i class="ion-star"></i></li>
                          </ul>
                          <ul>
                            <li>Class: <span><?php echo $row[5]; ?></span></li>
                            <li>Body Style: <span>Sedan</span></li>
                            <li>Transmission: <span><?php if ($row[10]) { echo "Automatic"; } else { echo "Manual"; } ?></span></li>
                          </ul>
                          <div class="listing-footer">
                            <span><a href="car.php?id=<?php echo $row[1]; ?>">Details</a></span>
                            <span>
                              Starting at <span class="price">$<?php echo $row[11]; ?></span> / day
                            </span>
                          </div>

                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="rq-pagination">
                <nav>
                  <ul class="rq-pagination-list">
                    <li class="pagin-text">
                      <a href="?page=<?php echo $page - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true"><i class="arrow_left"></i> Prev</span>
                      </a>
                    </li>
                    <li <?php if ($page == 1) echo "class='active'"; ?> ><a href="?page=1">1</a></li>
                    <li <?php if ($page == 2) echo "class='active'"; ?> ><a href="?page=2">2</a></li>
                    <li <?php if ($page == 3) echo "class='active'"; ?> ><a href="?page=3">3</a></li>
                    <li class="pagin-text">
                      <a href="?page=<?php echo $page + 1 ?>" aria-label="Next">
                        <span aria-hidden="true">next <i class="arrow_right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>

          </div>
        </div>  <!-- /.rq-content-block -->
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
                    <li><a href="#">Help</a></li>
                    <!-- <li><a href="#">Affiliate</a></li> -->
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <ul class="address">
                    <li><a href="#">Our Location</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <!-- <ul class="address">
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Car Blog</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">Press</a></li>
                  </ul> -->
                </div>
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
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/scripts.js" ></script>
  </body>
</html>