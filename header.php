<?php
if(isset($_SESSION["userid"])){
  $userid = $_SESSION["userid"];
}
?>

                <!-- </html> -->
    <!-- -------------------------------------------------------------- -->

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
              <?php if (isset($userid)){ ?>
                <li class="login-register-link right-side-link"><a href="account.php">
                        <i class="icon_profile"></i>Account</a>
                </li>
                  <li class="login-register-link right-side-link logout"><a href="apis/logout.php">
                          <i class="icon_close_alt"></i>Logout</a>
                  </li>
                <?php } else { ?>
                    <li class="login-register-link right-side-link"><a href="registration.php">
                            <i class="icon_lock-open_alt"></i>Login</a>
                    </li>
                <?php } ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header> 
    <!-- end header -->