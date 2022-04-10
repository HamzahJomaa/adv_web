<?php
$userid = $_SESSION["userid"];


?>
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
                <a class="navbar-brand" href="index.html"><img src="./img/company-logo.png" alt=""/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="car-listing-grid.html">Car listing</a></li>
                    <li><a href="about-us.html">About us</a></li>
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
                    <li class="dropdown right-side-link">
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
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header> <!-- end header -->