<?php
session_start();
if (isset($_SESSION['user_session']))
{
	header("Location: profile.php");
}
include_once('header.php');
session_start();

?>

<title>Login - Cookfinder</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>

<div class="page-container">
 <br>
 <br>
  <div class="page-content-wrapper">
    <section class="section-reservation-form padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="section-content">
          <div class="swin-sc swin-sc-title style-2">
            <h3 class="title"><span>Login to continue</span></h3>
          </div>
          <div class="reservation-form">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <p class="reservation-form-title text-center">We willing to help you make the reservation online to
                  save your time and money or you can call us directly through the customer service hotline:<a href="register.php" ><span class="text-default">
                    Register</span></a></p>
              </div>
            </div>
            <div class="swin-sc swin-sc-contact-form light mtl">
            
            <form class="" method="post" id="login-form">
      
            </div-->
        <div class="input-group col-md-5">
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        </div>
        <!--div class="input-group">
        <input type="email" class="form-control input-group-addon" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div-->
        <div class="input-group col-md-5">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="email" class="form-control" placeholder="Email address" name="user_email_address" id="user_email_address" />
        <span id="check-e"></span>
                  </div>
        
        <br>
        <div class="input-group col-md-5">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        <!--span id="check-e"></span-->
        
                  </div>
<br>
       
       
     	
<div class="input-group col-md-5">
            <button type="submit" class="swin-btn center " name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In	</button> 

<!--div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>Sign In</span></a></div-->

        </div>  
      
      </form>   
            
        
            
            
            
            
            
              <!--form>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" placeholder="Username" id="fullname" name="fullname"  class="form-control">
                  </div>
</div>
<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="Password" placeholder="Password" class="form-control">
                  </div>
                </div>
                <!--  div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <div class="fa fa-phone"></div>
                    </div>
                    <input type="text" placeholder="Phone" class="form-control">
                  </div-->
                  
                <!--div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    <input type="text" placeholder="Date" class="form-control datepicker">
                  </div> </div- ->
                
                <div class="form-group">
                  <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>Sign In</span></a></div>
                </div>
              </form-->
            </div>
          </div>
          <div class="section-deco"><img src="assets/images/pages/reservation-showcase.png" alt="fooday" class="img-deco"></div>
        </div>
      </div>
    </section>
    <section data-bottom-top="background-position: 50% 100px;" data-center="background-position: 50% 0px;"
      data-top-bottom="background-position: 50% -100px;" class="section-reservation-service padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="section-content">
          <div class="swin-sc swin-sc-title style-2 light">
            <h3 class="title"><span> </span></h3>
          </div>
          <div class="swin-sc swin-sc-iconbox light">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item icon-box-02 wow fadeInUpShort">
                  <!--div class="wrapper-icon"><i class="icons swin-icon-dish"></i><span class="number">1</span></div-->
                  <h4 class="title">Reservation</h4>
                  <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote
                    labore et</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                  <!--div class="wrapper-icon"><i class="icons swin-icon-dinner-2"></i><span class="number">2</span></div-->
                  <h4 class="title">Private Event</h4>
                  <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote
                    labore et</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                  <!--div class="wrapper-icon"><i class="icons swin-icon-browser"></i><span class="number">3</span></div-->
                  <h4 class="title">Online Order</h4>
                  <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote
                    labore et</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                  <!--div class="wrapper-icon"><i class="icons swin-icon-delivery"></i><span class="number">4</span></div-->
                  <h4 class="title">Fast Delivery</h4>
                  <div class="description">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote
                    labore et</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    
  </div>
</div>
<footer>
  <div class="subscribe-section"><img src="assets/images/background/bg5.png" alt="" class="img-subscribe">
    <div class="container">
      <div class="subscribe-wrapper">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="subscribe-heading">
              <h3 class="title">Subcribe Us Now</h3>
              <div class="des">Get more news and delicious dishes everyday from us</div>
            </div>
            <form class="widget-newsletter">
              <input placeholder="Email" class="form-control"><span class="submit"><i class="fa fa-paper-plane"></i></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-top"></div>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="ft-widget-area">
            <div class="ft-area1">
              <div class="swin-wget swin-wget-about">
                <div class="clearfix"><a class="wget-logo"><img src="assets/images/logo-ft.png" alt="" class="img img-responsive"></a>
                  <ul class="socials socials-about list-unstyled list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="wget-about-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
                </div>
                <div class="about-contact-info clearfix">
                  <div class="address-info">
                    <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                    <div class="info-content">
                      <p>157 White Oak Drive Kansas City </p>
                      <p>689 Lynn Street South Boston</p>
                    </div>
                  </div>
                  <div class="phone-info">
                    <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                    <div class="info-content">
                      <p>(617)-276-8031</p>
                      <p>(617)-276-8031</p>
                    </div>
                  </div>
                  <div class="email-info">
                    <div class="info-icon"><i class="fa fa-envelope"></i></div>
                    <div class="info-content">
                      <p>admin@fooday.com</p>
                      <p>support@fooday.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="ft-fixed-area">
            <div class="reservation-box">
              <div class="reservation-wrap">
                <h3 class="res-title">Open Hour</h3>
                <div class="res-date-time">
                  <div class="res-date-time-item">
                    <div class="res-date">
                      <div class="res-date-item">
                        <div class="res-date-text">
                          <p>Tuesday:</p>
                        </div>
                        <div class="res-date-dot">.......................................</div>
                      </div>
                    </div>
                    <div class="res-time">
                      <div class="res-time-item">
                        <p>7AM - 9PM</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="res-date-time-item">
                    <div class="res-date">
                      <div class="res-date-item">
                        <div class="res-date-text">
                          <p>Wednesday:</p>
                        </div>
                        <div class="res-date-dot">.......................................</div>
                      </div>
                    </div>
                    <div class="res-time">
                      <div class="res-time-item">
                        <p>7AM - 9PM</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="res-date-time-item">
                    <div class="res-date">
                      <div class="res-date-item">
                        <div class="res-date-text">
                          <p>Thursday:</p>
                        </div>
                        <div class="res-date-dot">.......................................</div>
                      </div>
                    </div>
                    <div class="res-time">
                      <div class="res-time-item">
                        <p>7AM - 9PM</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="res-date-time-item">
                    <div class="res-date">
                      <div class="res-date-item">
                        <div class="res-date-text">
                          <p>Friday:</p>
                        </div>
                        <div class="res-date-dot">.......................................</div>
                      </div>
                    </div>
                    <div class="res-time">
                      <div class="res-time-item">
                        <p>7AM - 9PM</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="res-date-time-item">
                    <div class="res-date">
                      <div class="res-date-item">
                        <div class="res-date-text">
                          <p>Saturday:</p>
                        </div>
                        <div class="res-date-dot">.......................................</div>
                      </div>
                    </div>
                    <div class="res-time">
                      <div class="res-time-item">
                        <p>7AM - 9PM</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="res-date-time-item">
                    <div class="res-date">
                      <div class="res-date-item">
                        <div class="res-date-text">
                          <p>Sunday:</p>
                        </div>
                        <div class="res-date-dot">.......................................</div>
                      </div>
                    </div>
                    <div class="res-time">
                      <div class="res-time-item">
                        <p>7AM - 9PM</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="res-date-time-item">
                    <div class="res-date">
                      <div class="res-date-item">
                        <div class="res-date-text">
                          <p>Monday:</p>
                        </div>
                        <div class="res-date-dot">.......................................</div>
                      </div>
                    </div>
                    <div class="res-time">
                      <div class="res-time-item">
                        <p>Close</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <h3 class="res-title">Reservation Numbers</h3>
                <p class="res-number">(617)-276-8031</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
</div>
<div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z"
  class="pageload-overlay">
  <div class="loader-wrapper">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
      <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
    </svg>
    <div class="sk-circle">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
    <div class="sk-circle sk-circle-out">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div>
</div>
<div id="live-setting" class="hidden-sm hidden-xs"><a id="open-popup"><i class="fa fa-paint-brush"></i></a>
  <form id="popup">
    <h5 class="live-title">Site Color</h5>
    <div class="popup-inner">
      <div class="box-setting">
        <div class="pattern-color">
          <p>Pattern Color Variable:</p>
          <p class="text-small">( You can change any color as you want in source code. )</p>
          <div class="color-setting">
            <ul class="list-unstyled">
              <li class="colordefault"><span>Default</span><a></a></li>
              <li class="color01"><span>Pizza + Bread</span><a></a></li>
              <li class="color02"><span>Wine</span><a></a></li>
              <li class="color03"><span>Coffee</span><a></a></li>
              <li class="color04"><span>Vegetable</span><a></a></li>
              <li class="color05"><span>Cream</span><a></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <h5 class="live-title">Layout Options</h5>
    <div class="popup-inner">
      <div class="layout-setting"><a class="wide"> <span>Wide</span></a><a class="boxed"> <span>Boxed</span></a></div>
    </div>
    <div class="boxed-setting">
      <h5 class="live-title">Boxed layout images</h5>
      <div class="popup-inner">
        <div class="layout-boxed-bg"><a data-img="assets/images/layout-option/bg-01.jpg" class="bx-layout-img"><img src="assets/images/layout-option/bg-01.jpg"
              class="img img-responsive"></a><a data-img="assets/images/layout-option/bg-02.jpg" class="bx-layout-img"><img
              src="assets/images/layout-option/bg-02.jpg" class="img img-responsive"></a><a data-img="assets/images/layout-option/bg-03.jpg"
            class="bx-layout-img"><img src="assets/images/layout-option/bg-03.jpg" class="img img-responsive"></a></div>
      </div>
    </div>
  </form>
</div>
</div>
<!-- jQuery-->
<!--script src="assets/vendors/jquery-1.10.2.min.js"></script-->


<!-- Bootstrap JavaScript-->
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- Vendors-->
<script src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="assets/vendors/jquery-countTo/jquery.countTo.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/parallax/parallax.min.js"></script>
<script src="assets/vendors/gmaps/gmaps.min.js"></script>
<script src="assets/vendors/audiojs/audio.min.js"></script>
<script src="assets/vendors/vide/jquery.vide.min.js"></script>
<script src="assets/vendors/pageloading/js/svgLoader.min.js"></script>
<script src="assets/vendors/pageloading/js/classie.min.js"></script>
<script src="assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js"></script>
<script src="assets/vendors/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/vendors/wowjs/wow.min.js"></script>
<script src="assets/vendors/skrollr.min.js"></script>
<script src="assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/vendors/jquery-cookie/js.cookie.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
  crossorigin="anonymous"></script>
<!-- Own script-->
<script src="assets/js/layout.js"></script>
<script src="assets/js/elements.js"></script>
<script src="assets/js/widget.js"></script>
</body>


</html>