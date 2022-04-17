<?php
require "apis/connection.php";
$id = $_GET["id"];
$userid = $_SESSION["userid"];

if (!isset($id)) {
 header("HTTP/1.0 404 Not Found");
 die();
}



$car_sql = " SELECT * FROM cars WHERE carid='" . $id . "'";
$result_car = $connection->query($car_sql);
$car = $result_car->fetch_array();


$review_count_sql = " SELECT COUNT(*) as review_count FROM reviews WHERE carid='" . $id . "'";
$result_count = $connection->query($review_count_sql);
$review_count = $result_count->fetch_array();


$review_sql = "SELECT rating,review,user.name,date FROM reviews INNER JOIN user on user.userid = reviews.userid WHERE carid='" . $id . "'";
$result_review = $connection->query($review_sql);

$statusMessage = "";
$added = 0;

if (isset($_POST["add-review"])) {
 $reviewtext = $_POST["review-text"];
 $date = date("Y-m-d h:i:s");
 $rating = 4;
 $insert_query = $connection->prepare("INSERT INTO `reviews`(`carid`, `userid`, `rating`, `review`, `date`) VALUES (?,?,?,?,?)");
 $insert_query->bind_param("sssss", $id, $userid, $rating, $reviewtext, $date);
 if (!$insert_query->execute()) {
  die($connection->error);
  $statusMessage = $connection->error;
  $added = 0;
 } else {
  $statusMessage = "Review Added Successfully";
  $added = 1;
 }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listing details</title>
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

    <div class="rq-page-content"> <!-- start of page content -->
        <div class="rq-listing-details">
            <div class="rq-listing-single"> <!-- start of banner slider -->
                <div class="rq-listing-gallery-post">
                    <div class="rq-gallery-content">
                        <div class="details-slider owl-carousel">
                            <div class="item">
                                <img src="img/listing-detail2.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/listing-detail.png" alt="">
                            </div>
                            <div class="item">
                                <img src="img/listing-detail2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end of banner slider -->
            <div class="rq-content-block">
                <div class="container">
                    <div class="rq-title-container bredcrumb-title text-center"> <!-- start of breadcrumb -->
                        <h1 class="rq-title light"><?php echo $car["carname"]; ?></h1>
                        <ol class="breadcrumb secondary rq-subtitle">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="./cars.php">Car listing</a></li>
                            <li class="active">Car Listing Details</li>
                        </ol>
                    </div> <!-- end of breadcrumb -->
                    <div class="rq-listing-promo-wrapper">
                        <div class="row"> <!-- start of listing promo -->
                            <div class="col-md-12">
                                <div class="rq-listing-promo-content">
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon1.png" alt="">
                                        <h6 class="rq-listing-item-title">Mileage</h6>
                                        <h4 class="rq-listing-item-number"><?php echo $car["mileage"]; ?></h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon2.png" alt="">
                                        <h6 class="rq-listing-item-title">Transmission</h6>
                                        <h4 class="rq-listing-item-number"><?php if ($car["transmission"]) {
                                          echo "Automatic";
                                         } else {
                                          echo "Manual";
                                         } ?></h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon3.png" alt="">
                                        <h6 class="rq-listing-item-title">Seats</h6>
                                        <h4 class="rq-listing-item-number"><?php echo $car["seats"]; ?> Adults</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon4.png" alt="">
                                        <h6 class="rq-listing-item-title">Luggage</h6>
                                        <h4 class="rq-listing-item-number"><?php echo $car["luggage"]; ?> Bags</h4>
                                    </div>
                                    <div class="rq-listing-item">
                                        <img src="img/listing-icon5.png" alt="">
                                        <h6 class="rq-listing-item-title">Fuel</h6>
                                        <h4 class="rq-listing-item-number"><?php echo $car["fuel"]; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of listing promo -->
                    </div>
                    <div class="rq-feature-tab">
                        <div class="rq-blog-listing">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#listing_tab_hor_1"
                                                                          aria-controls="listing_tab_hor_1" role="tab"
                                                                          data-toggle="tab">Features</a></li>
                                <li role="presentation"><a href="#listing_tab_hor_2" aria-controls="listing_tab_hor_2"
                                                           role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#listing_tab_hor_3" aria-controls="listing_tab_hor_3"
                                                           role="tab"
                                                           data-toggle="tab">Reviews (<?php echo $review_count["review_count"]; ?>)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="listing_tab_hor_1">
                                    <ul class="rq-listing-lists">
                                        <li class="checked">Air conditioned</li>
                                        <li class="unchecked">Child Seats</li>
                                        <li class="checked">GPS</li>
                                        <li class="checked">Language</li>
                                        <li class="checked">Music</li>
                                        <li class="checked">Seat Belts</li>
                                        <li class="checked">Sleeping bags</li>
                                        <li class="checked">Water</li>
                                        <li class="checked">Bluetooth</li>
                                        <li class="unchecked">Onboard computer</li>
                                        <li class="checked">Audio Input</li>
                                        <li class="unchecked">Long term trips</li>
                                        <li class="checked">First Aid Kit</li>
                                        <li class="checked">Remote central looking</li>
                                        <li class="checked">climate control</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_2">
                                    <p><?php echo $car["descripton"]; ?></p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="listing_tab_hor_3">
                                 <?php while ($row = $result_review->fetch_row()) { ?>
                                     <div class="rq-single-post-header">

                                         <div class="author-info-content">
                          <span class="author-name"><a
                                      href="#"><?php echo $row[2]; ?></a> <p><?php echo date("Y-m-d h:i", strtotime($row[3])); ?></p>
                            <span>
                              <i class="ion-android-star<?php if ($row[0] < 1) {
                               echo "-outline";
                              } ?>"></i>
                              <i class="ion-android-star<?php if ($row[0] < 2) {
                               echo "-outline";
                              } ?>"></i>
                              <i class="ion-android-star<?php if ($row[0] < 3) {
                               echo "-outline";
                              } ?>"></i>
                              <i class="ion-android-star<?php if ($row[0] < 4) {
                               echo "-outline";
                              } ?>"></i>
                              <i class="ion-android-star<?php if ($row[0] < 5) {
                               echo "-outline";
                              } ?>"></i>
                            </span>
                          </span>
                                             <span class="author-role"><?php echo $row[1]; ?></span>
                                         </div>
                                     </div>
                                 <?php } ?>
                                    <div class="review-form">
                                        <div id="respond" class="comment-respond">
                                            <form id="commentform" class="commentform" action="#" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="comment-input" name="review-text"
                                                                  placeholder="Here goes your review"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button <?php if (empty($userid)) { echo "disabled"; }  ?> name="add-review"
                                                                class="continue-btn rq-btn rq-btn-normal">Submit Review
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- ./edn feature tab -->
                    <div class="location-map">
                        <div class="listing-page-title">
                            <h3>Location</h3>
                        </div>
                        <div class="rq-contact-us-map"> <!-- start map portion -->
                            <div id="listing-map"></div>
                        </div> <!-- end map portion -->

                    </div>
                </div>
            </div> <!-- .end rq-content-block -->
            <div class="rq-content-block gray-bg">
                <div class="container">
                    <div class="listing-page-title">
                        <h3>Book a Car Now</h3>
                    </div>
                    <div class="rq-car-booking-section">
                        <div class="car-search">
                            <div class="rq-search-container">
                                <div class="rq-search-single">
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading">Location</span>
                                        <select name="categories" id="location" class="category-option">
                                            <option value="0">Pick a location</option>
                                            <option value="Manama, Bahrain">Manama, Bahrain</option>
                                            <option value="Cairo, Egypt">Cairo, Egypt</option>
                                            <option value="Alexandria, Egypt">Alexandria, Egypt</option>
                                            <option value="Sharm El Sheikh, Egypt">Sharm El Sheikh, Egypt</option>
                                            <option value="Amman, Jordan">Amman, Jordan</option>
                                            <option value="Kuwait City, Kuwait">Kuwait City, Kuwait</option>
                                            <option value="Beirut, Lebanon">Beirut, Lebanon</option>
                                            <option value="Muscat, Oman">Muscat, Oman</option>
                                            <option value="Doha, Qatar">Doha, Qatar</option>
                                            <option value="Riyadh, Saudi Arabia">Riyadh, Saudi Arabia</option>
                                            <option value="Jeddah, Saudi Arabia">Jeddah, Saudi Arabia</option>
                                            <option value="Medina, Saudi Arabia">Medina, Saudi Arabia</option>
                                            <option value="Ankara, Turkey">Ankara, Turkey</option>
                                            <option value="Istanbul, Turkey">Istanbul, Turkey</option>
                                            <option value="Abu Dhabi, United Arab Emirates">Abu Dhabi, United Arab Emirates</option>
                                            <option value="Dubai, United Arab Emirates">Dubai, United Arab Emirates</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="rq-search-single">
                                    <div class="rq-search-content">
                                        <span class="rq-search-heading">Pick up</span>
                                        <input type="text" name="datefilter" class="rq-form-element datepicker"
                                               id="startdate" placeholder="Pick up date"/>
                                        <i class="ion-chevron-down datepicker-arrow"></i>
                                    </div>
                                </div>
                                <div class="rq-search-single">
                                    <div class="rq-search-content last-child ">
                                        <span class="rq-search-heading">Return</span>
                                        <input type="text" name="datefilter" class="rq-form-element" id="enddate"
                                               placeholder="Return date"/>
                                        <i class="ion-chevron-down datepicker-arrow"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-details">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="booking-section-single">
                                        <h3 class="section-title">Resources</h3>
                                        <div class="section-adding-option">
                          <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-one">
                            <label for="option-one">GPS <span>$14.00 - Per Day</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-two">
                            <label for="option-two">Child Seat <span>$15.00 - One Time</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-three">
                            <label for="option-three">Music <span>$20.00 - One Time</span></label>
                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div class="booking-section-single">
                                        <h3 class="section-title">Security Deposites</h3>
                                        <div class="section-adding-option">
                          <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-four">
                            <label for="option-four">Personal Accident Insurance <span>$10.00 - Per Day</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-five">
                            <label for="option-five">CWD (reduce excess fee for 50%) <span> $80.00 - One Time</span></label>
                          </span>
                                            <span class="rq-checkbox-secondary">
                            <input type="checkbox" id="option-six">
                            <label for="option-six"> Another Security Deposit <span>$30.00 - One Time</span></label>
                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="total-price">Total Booking Cost : <span id="price">$150.00</span></h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="book-btn">
                                        <button <?php echo empty($userid)? "disabled" : ""; ?> id="book" class="rq-btn rq-btn-primary btn-large">Book Now <i
                                                    class="ion-android-car"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.rq-content-block -->
            <div class="rq-content-block">
                <div class="related-car-faq">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="section-title">Related Cars</h3>
                                <div class="child-tab-wrapper related-cars">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li>
                                            <a href="#">
                                                <img src="img/listing-details-tab/tab-image1.png" alt="">
                                                <span class="tittle">Lamborghini Aventado 2012</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$39.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="img/listing-details-tab/tab-image2.png" alt="">
                                                <span class="tittle">Ford Red Sport Car</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$29.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#car-three" role="tab" data-toggle="tab">
                                                <img src="img/listing-details-tab/tab-image3.png" alt="">
                                                <span class="tittle">Kia Rio White Car 2016</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$27.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#car-four" role="tab" data-toggle="tab">
                                                <img src="img/listing-details-tab/tab-image1.png" alt="">
                                                <span class="tittle">Kia Rio White Car 2016</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$27.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#car-five" role="tab" data-toggle="tab">
                                                <img src="img/listing-details-tab/tab-image2.png" alt="">
                                                <span class="tittle">Kia Rio White Car 2016</span>
                                                <span class="car-des">Four Seater Car</span>
                                                <span class="rent-price">$27.00<b>/Day</b></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="section-title">FAQs</h3>
                                <div class="rq-faqs">
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">What is road tax?</a>
                                        <p class="hidden-content">
                                            Road tax, known by various names around the world, is a tax which has to be paid on, or included with, a motorised vehicle to use it on a public road.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">What is the Turbo. cancellation policy?</a>
                                        <p class="hidden-content">
                                            So long as a cancellation is made at least 48 hours before your reserved pick up date and time, Turbo. will issue a full refund for the amount of your booking. 
                                            A fee of $75 will apply to any cancellations made within less than 48 hours notice. 
                                            Bookings are non-refundable if no notice of cancellation is given until after the reserved pick up date/time. 
                                            All cancellations must be processed by Turbo., not our local car rental suppliers/affiliates.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">What kind of insurance is available for my rental car?</a>
                                        <p class="hidden-content">
                                            Renting a car might seem like a daunting prospect at first. 
                                            You may have heard about extra fees and unexpected costs that come with car rental? 
                                            Well, all of these extra costs have simple explanations and don't have to be hidden from you when you rent a car. 
                                            It's important to know everything about renting a car before you actually commit to renting. 
                                            That's where we come in!
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">Can you guarantee that the car listed on my voucher is the specific car I will receive?</a>
                                        <p class="hidden-content">
                                            Like all car rental companies, Turbo. cannot guarantee the make or model of the rental vehicle you will receive; 
                                            what can be guaranteed is the transmission and size of the vehicle. 
                                            If you would like a specific make or model we will be more the happy to request it for you, however all car rental companies are unlikely to guarantee specific makes or models outside of luxury/specialty vehicles.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">How quickly will my reservation be confirmed?</a>
                                        <p class="hidden-content">
                                            Most Turbo. reservations are confirmed within 20 minutes after making payment. 
                                            If making a last minute reservation (pick up within the next 48 hours) we strongly suggest you contact our reservations center toll free at +961 81 694 185.
                                        </p>
                                    </div>
                                    <div class="faq-single">
                                        <a href="#" class="faq-title">Is there a fee if I need to change my reservation?</a>
                                        <p class="hidden-content">
                                            There is no fee to change a car rental booking provided that you contact Turbo. before the end of the rental period. 
                                            All changes must be processed by Turbo. and not through our local car rental suppliers/affiliates. 
                                            Changing a reservation may subject you to the current rental rate, as it is at the time of modification.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .rq-content-block -->
        </div>
    </div> <!-- /.page-content -->
</div> <!-- end #main-wrapper -->

        <!-- Adding footer -->
        <?php
              include("footer.php")
        ?>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0QI6vd531_4xsTobCg_J1_6BZOEolRbs&libraries=visualization&callback=initMapListing">
</script>
<script src="js/mapdetails.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        let perDay = <?php echo $car[11]; ?> ;
        let car = <?php echo $id ?>;
        let user = <?php echo isset($userid) ? $userid : "null"  ?>;

        let price = updatePrice(0, 0);

        let booking = {
            gps: false,
            childseat: false,
            music: false,
            pei: false,
            cwd: false,
            asd: false,
            checkin: "",
            checkout: "",
            days: 0,
            location: "",
            total: 0,
        }


        $("#option-one").change(function () {
            if ($(this).prop("checked")) {
                booking.total = updatePrice(booking.total, 14)
            } else {
                booking.total = updatePrice(booking.total, -14)
            }
            booking.gps = !booking.gps
        })

        $("#option-two").change(function () {
            if ($(this).prop("checked")) {
                booking.total = updatePrice(booking.total, 15)
            } else {
                booking.total = updatePrice(booking.total, -15)
            }
            booking.childseat = !booking.childseat
        })

        $("#option-three").change(function () {
            if ($(this).prop("checked")) {
                booking.total = updatePrice(booking.total, 20)
            } else {
                booking.total = updatePrice(booking.total, -20)
            }
            booking.music = !booking.music
        })

        $("#option-four").change(function () {
            if ($(this).prop("checked")) {
                booking.total = updatePrice(booking.total, 10)
            } else {
                booking.total = updatePrice(booking.total, -10)
            }
            booking.pei = !booking.pei
        })

        $("#option-five").change(function () {
            if ($(this).prop("checked")) {
                booking.total = updatePrice(booking.total, 80)
            } else {
                booking.total = updatePrice(booking.total, -80)
            }
            booking.cwd = !booking.cwd
        })

        $("#option-six").change(function () {
            if ($(this).prop("checked")) {
                booking.total = updatePrice(booking.total, 30)
            } else {
                booking.total = updatePrice(booking.total, -30)
            }
            booking.asd = !booking.asd
        })

        $("input#startdate").on("apply.daterangepicker", function () {
            let start = new Date($("input#startdate").val())
            let end = new Date($("input#enddate").val())
            const diffTime = Math.abs(start - end);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            const total = diffDays * perDay
            if (booking.checkin !== "" && booking.checkout !== ""){
                const olddiffTime = Math.abs(new Date(booking.checkin) - new Date(booking.checkout));
                const olddiffDays = Math.ceil(olddiffTime / (1000 * 60 * 60 * 24));
                const old = olddiffDays * perDay
                booking.total = updatePrice(booking.total, -1 * old)
            }
            booking.total = updatePrice(booking.total, total)
            booking.checkin = start.getFullYear() + "-" + (start.getMonth()+1) + "-" + start.getDate()
            booking.checkout = end.getFullYear() + "-" + (end.getMonth()+1) + "-" + end.getDate()
            booking.days = diffDays
        })

        $("#location").change(function () {
            booking.location = $(this).val()
        })

        $("#book").click(function () {
            $.ajax("apis/book.php",{
                method:"POST",
                data: {booking , car, user}
            }).success((data)=>{
                alert("Thank you for your booking, we will contact you soon")
            }).error((error)=>{
                alert("An Error Occurred, Please check your browser logs")
                console.log(error.responseText)
            })
        })
    })

    const updatePrice = (oldprice, value) => {
        let priceSection = $("#price")[0]
        priceSection.innerHTML = `$${oldprice + value}`
        return oldprice + value
    }
</script>
</body>
</html>