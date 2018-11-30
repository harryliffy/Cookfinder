
<?php 
include_once('core/flac-core.php');
?>
<?php


/* if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
} */

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CookFInder</title>
  <!-- Bootstrap CSS-->
  <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
  <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
  <!-- IE 9-->
  <!-- Vendors-->
  <link rel="stylesheet" href="assets/vendors/flexslider/flexslider.min.css">
  <link rel="stylesheet" href="assets/vendors/swipebox/css/swipebox.min.css">
  <link rel="stylesheet" href="assets/vendors/slick/slick.min.css">
  <link rel="stylesheet" href="assets/vendors/slick/slick-theme.min.css">
  <link rel="stylesheet" href="assets/vendors/animate.min.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="assets/vendors/pageloading/css/component.min.css">
  <link rel="icon" sizes="180x180" href="assets/images/favicon.png" type="image/png">
  <!-- Font-icon-->
  <link rel="stylesheet" href="assets/fonts/font-icon/style.css">
  <!-- Style-->
  <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
  <link rel="stylesheet" type="text/css" href="assets/css/elements.css">
  <link rel="stylesheet" type="text/css" href="assets/css/extra.css">
  <link rel="stylesheet" type="text/css" href="assets/css/widget.css">
  <link id="colorpattern" rel="stylesheet" type="text/css" href="assets/css/color/colordefault.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="assets/css/live-settings.css">
  <!-- Google Font-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
  <!-- Script Loading Page-->
  <script src="assets/vendors/html5shiv.js"></script>
  <script src="assets/vendors/respond.min.js"></script>
  <script src="assets/vendors/pageloading/js/snap.svg-min.js"></script>
  <script src="assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js"></script>
</head>

<body>
  <div id="pagewrap" class="pagewrap">
    <div id="html-content" class="wrapper-content">
      <header>
        <div class="header-top top-layout-02">
          <div class="container">
            <div class="topbar-left">
              <div class="topbar-content">
                <div class="item">
                  <div class="wg-contact"><i class="fa fa-map-marker"></i><span>25 Ademola Adetokumbo Cresent, Abuja,
                      Nigeria</span></div>
                </div>
                <div class="item">
                  <div class="wg-contact"><i class="fa fa-phone"></i><span>+234 903 703 4192</span></div>
                </div>
              </div>
            </div>
            <div class="topbar-right">
              <div class="topbar-content">
                <div class="item">
                  <ul class="socials-nb list-inline wg-social">
    


    <?php
                   if(!isset($_SESSION['user_session']))
{
}
else{
  echo ' 
  <li><a href="logout.php"><i class="fa fa-sign-out"></i></a>Logout</li>';
}

  ?>

                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="item">
                  <div class="wg-social"><i class="fa fa-user"></i>
                  <?php
                   if(!isset($_SESSION['user_session']))
{
  echo'
  <a href="login.php">Login</a></div>';
 /* <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false" class="dropdown-toggle">Be a Chef</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                    <ul class="dropdown-menu">
                      <li><a href="blogs">Chef Listing</a></li>
                      <li><a target="_blank" href="admin/">Chef Account</a></li>

                    </ul>
                  </li>
  '; */
  
}
  else{
    $fullname=$row['full_name'];
    
    echo'<a href="profile.php">'. $row['full_name'].'</a></div>
    
    ';
  }
  ?>
                  
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-main">
          <div class="container">
            <div class="open-offcanvas">&#9776;</div>
            <div class="utility-nav">
              <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                  class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                <div class="dropdown-menu">
                  <div class="search-form">
                    <form action="#">
                      <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <div class="input-group-addon"><i class="fa fa-search"></i></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-logo"><a href="index.php" class="logo"><img width="250  " src="assets/images/logo.png"
                  alt="cookfinder" class="logo-img"></a></div>
            <nav id="main-nav-offcanvas" class="main-nav-wrapper">
              <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
              <div class="main-nav">
                <ul id="main-nav" class="nav nav-pills">
                  <li id="home" class="dropdown ">
                  <a href="index.php" class="dropdown-toggle">Home</a>
                  <i class="fa fa-angle-down btn-open-dropdown"></i>
                    <ul class="dropdown-menu">
                  </ul>
                  </li>
                  <li id="about" ><a href="about">About</a></li>
                  <li><a href="reservation">Reservation</a></li>
                  <li id="menu" class="dropdown"><a href="menu.php" class="dropdown-toggle">

                      Menu</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                    <ul class="dropdown-menu">
                    <li><a href="menu.php">All</a></li>
                      <li><a href="menu-classic">Intercontinental</a></li>
                      <li><a href="menu-grid-1">Continental</a></li>
                      <li><a href="menu-grid-2">Local </a></li>
                      <li><a href="menu-grid-3">Traditional</a></li>
                     
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false" class="dropdown-toggle">Be a Chef</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                    <ul class="dropdown-menu">
                      <li><a href="blogs">Chef Listing</a></li>
                      <li><a target="_blank" href="admin/">Chef Account</a></li>

                    </ul>
                  </li>
                  <li id="contact" ><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>