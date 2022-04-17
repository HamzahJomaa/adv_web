<?php
require "apis/connection.php";
$page = $_GET["page"];
if (!isset($page)){
  $page = 1;
}

$per_page_record = 9;
$start_from = ($page-1) * $per_page_record; 


$sql = "SELECT * FROM cars INNER JOIN category on category.categoryid = cars.category";


$cat = $_GET["cat"];
$model = $_GET["model"];
$type = $_GET["type"];


if (isset($cat) || isset($model) || isset($type)){
  $sql .= " WHERE carid != 0";

  if (isset($cat)){
    $sql .= " AND category=".$cat."";
  }

  if (isset($model)){
    $sql .= " AND model=".$model."";
  }

  if (isset($type)){
    $sql .= " AND cartype='".$type."'";
  }
  
}



$sql .= " LIMIT $start_from, $per_page_record";
$result = $connection->query($sql);


$category_sql = "SELECT * FROM category ";
$result_category = $connection->query($category_sql);

$model_sql = "SELECT DISTINCT model FROM cars ";
$model_result = $connection->query($model_sql);


$type_sql = "SELECT DISTINCT cartype FROM cars ";
$cartype_result = $connection->query($type_sql);
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
              <!-- Adding Header -->
              <?php
              include("header.php")
            ?>
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
            <form action="#">
              <div class="rq-listing-top-bar-filter-option">
                <div class="filter-list">
                  <h5>Filter by</h5>
                  <div class="filter-single">
                    <div class="btn-group">
                      <select class="btn btn-default dropdown-toggle" name="category" id="category">
                        <option value=""> Category </option>
                        <?php while ($category = $result_category->fetch_row()) { ?>
                          <option <?php if ($cat === $category[0]) { echo "selected"; } ?> value="<?php echo $category[0];?>"> <?php echo $category[1];?> </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="filter-single">
                    <div class="btn-group">
                      <select class="btn btn-default dropdown-toggle" name="model" id="model">
                        <option value=""> Model </option>
                        <?php while ($year = $model_result->fetch_row()) { ?>
                          <option <?php if ($model === $year[0]) { echo "selected"; } ?> value="<?php echo $year[0];?>"> <?php echo $year[0];?> </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="filter-single">
                    <div class="btn-group">
                      <select class="btn btn-default dropdown-toggle" name="type" id="type">
                        <option value=""> Type </option>
                        <?php while ($cartype = $cartype_result->fetch_row()) { ?>
                          <option <?php if ($type === $cartype[0]) { echo "selected"; } ?> value="<?php echo $cartype[0];?>"> <?php echo $cartype[0];?> </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="rq-grid-list-view-option">
                  <a class="active" href="#" data-class="rq-listing-grid"><i class="ion-grid"></i></a>
                  <a href="#" data-class="rq-listing-list"><i class="ion-navicon"></i></a>
                </div>
              </div>
            </form>

            <div class="rq-car-listing-wrapper">
              <div class="rq-listing-choose rq-listing-grid">
                <div class="row">
                  <?php while ($row = $result -> fetch_row()) { ?>
                    <div class="col-md-4 col-sm-6">
                      <div class="listing-single">
                        <div class="listing-img">
                          <img src="img/cars/<?php  echo $row[12]; ?>" alt="">
                        </div>
                        <div class="listing-details">
                          <h5 class="car-brand"><?php echo $row[14]; ?></h5>
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
                            <span><a href="car.php?id=<?php echo $row[0]; ?>">Details</a></span>
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
    <!-- Adding footer -->
    <?php
              include("footer.php")
    ?>
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/scripts.js" ></script>
    <script>
      $(document).ready(function(){
        $("#category").change(function(e){
          if ($(this).val()){
            location.href = updateQueryStringParameter(location.href,"cat",$(this).val())
          }else{
            location.href = removeURLParameter(location.href,"cat")
          }
        })
        $("#model").change(function(e){
          if ($(this).val()){
            location.href = updateQueryStringParameter(location.href,"model",$(this).val())
          }else{
            location.href = removeURLParameter(location.href,"model")
          }
        })
        $("#type").change(function(e){
          if ($(this).val()){
            location.href = updateQueryStringParameter(location.href,"type",$(this).val())
          }else{
            location.href = removeURLParameter(location.href,"type")
          }
        })
      })

      function updateQueryStringParameter(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
          return uri.replace(re, '$1' + key + "=" + value + '$2');
        }
        else {
          return uri + separator + key + "=" + value;
        }
      }

      function removeURLParameter(url, parameter) {
          //prefer to use l.search if you have a location/link object
          var urlparts = url.split('?');   
          if (urlparts.length >= 2) {

              var prefix = encodeURIComponent(parameter) + '=';
              var pars = urlparts[1].split(/[&;]/g);

              //reverse iteration as may be destructive
              for (var i = pars.length; i-- > 0;) {    
                  //idiom for string.startsWith
                  if (pars[i].lastIndexOf(prefix, 0) !== -1) {  
                      pars.splice(i, 1);
                  }
              }

              return urlparts[0] + (pars.length > 0 ? '?' + pars.join('&') : '');
          }
          return url;
      }
    </script>
  </body>
</html>