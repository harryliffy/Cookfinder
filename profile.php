<?php
session_start();
if(!isset($_SESSION['user_session']))
{
	header("Location: login.php");
}

include_once('header.php');
$navigation=new Navigation();
$navigation->ActiveMenu('home');



?>
<div class="page-container">
  <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;"
    class="page-title page-blog">
    <div class="container">
      &nbsp;
      <!--div class="title-wrapper">
        <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;"
          data-anchor-target=".page-title" class="title">Newest Blog </div>
        <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span
            class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
        <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;"
          data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">All
          information and stories from our blog will help you have a best meal for your day</div>
      </div-->
    </div>
  </div>
  <div class="page-content-wrapper">

<!--section class="blog-section-03 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title">
                  <p class="top-title"><span>Update From</span></p>
                  <h3 class="title">Our Featured Blog</h3>
                </div>
                <div class="swin-sc swin-sc-blog-masonry">
                  <div class="grid">
                    <div class="grid-sizer col-md-1 col-sm-1 col-xs-1"></div>
                    <!--div class="grid-item col-md-8 col-sm-12 grid-item-h1">
                      <div class="blog-item swin-transition wow fadeInUpShort">
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <div class="blog-featured-img"><img src="assets/images/blog/blog-slider-1.jpg" alt="fooday" class="img img-responsive"></div>
                        <div class="blog-content">
                          <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                          <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle For Cold Weather</a></h3>
                          <p class="blog-description">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                          <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                      </div>
                    </div- ->
                    <div class="grid-item col-md-6 col-sm-12 grid-item-h1">
                      <div class="blog-item swin-transition wow fadeInUpShort">
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <div class="blog-featured-img"><img src="assets/images/blog/blog-grid-1.jpg" alt="fooday" class="img img-responsive"></div>
                        <div class="blog-content">
                          <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                          <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Noodle For Cold Weather</a></h3>
                          <p class="blog-description">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                      </div>
                    </div>
            
</div>
</div>
</div>
</section-->

    <section class="padding-top-100 padding-bottom-100">
    <hr>
      <div class="container">
        <div class="row">


        
<br>

          <div class="page-main col-md-8">



          <div class="grid-item col-md-10 col-sm-12 grid-item-h1">
                      <div class="blog-item swin-transition wow fadeInUpShort">
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <!--p><span>Post By </span><a href="#">Admin</a></p-->
                            <p></p>
                          </div>
                        </div>
                        <div class="blog-featured-img"><img src="assets/images/banner-img-2.jpg" alt="fooday" class="img img-responsive"></div>
                        <div class="blog-content">
                          <div class="blog-date" style="background-image:url('assets/images/team/team-thumbnail-1.png'); background-size: cover;width:120px!important;height:120px!important;"><!--span class="day">12</span><span class="month">Jun</span--></div>
                         <br> <h3 class="blog-title text-center "><p href="#" class="swin-transition"><?php echo $fullname;?></p></h3>
                          <p class="blog-description text-justify">Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                        </div>
                      </div>
                    </div>
<br>
<br>
<style>
 .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff;
    background-color: #f15f2a!important;
}

</style>

<div class="grid-item col-md-10 col-sm-12 grid-item-h3">
  <div class="row">
  <br><b> <h3 class="blog-title dark-profile-tab p-10"><p href="#" class="swin-transition"> <span class="fa fa-cog"></span> Profile settings</p></h3></b>
  <!--span class="swin-sc swin-sc-title style-2" ><span class="fa fa-cog"></span>  </span-->
  <p>To make the tabs toggleable, add the data-toggle="pill" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
  
  <br>
  
  <ul class="nav nav-pills dark-profile-tab">
    <!--li class="active"><a class="tag" data-toggle="pill" href="#home">Home</a></li-->
    <li class="active"><a class="text-default" data-toggle="pill" href="#menu1">History <span class="fa fa-bell"></span></a></li>
    <li><a class="text-default" data-toggle="pill" href="#menu2">Orders <span class="fa fa-list"></span></a></li>
    <li><a class="text-default" data-toggle="pill" href="#menu3">Edit Setting <span class="fa fa-lock"></span></a></li>
  </ul>
  
  <div class="tab-content">
    <!--div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div-->
    <div id="menu1" class="tab-pane fade in active">
      <div class="col-md-12 brand-border">
      <p> Successful transactions and authentication activities  <p>
      <div class="swin-widget widget-categories">
              <!--div class="title-widget">Category</div-->
              <div class="widget-body widget-content clearfix"><!--a  href="#" class="alert alert-info link"><i class="icons fa fa-angle-right"></i><span
                    class=" text">Pending orders</span><span class="badge">12</span></a--><a href="#" class="alert-info link"><i class="icons fa fa-angle-right"></i><span
                    class=" text">Completed order</span><span class="badge">12-jun-2018 20:58pm</span></a><a href="#" class="alert-info link"><i class="icons fa fa-angle-right"></i><span
                    class=" text">New Dishes</span><span class="badge">13-jun-2018 09:12am</span></a><a href="#" class="alert-warning link"><i class="icons fa fa-angle-right"></i><span
                    class=" text">Dessert</span><span class="badge">13-jun-2018 09:15am</span></a><a href="#" class="alert-danger link"><i class="icons fa fa-angle-right"></i><span
                    class=" text">Discount Event</span><span class="badge">13-jun-2018 09:18am</span></a></div>
            </div>
      </div>
      <!--h3>Menu 1</h3-->
      <!--div class="swin-widget widget-categories">
              <div class="title-widget">Category</div>
              <div class="widget-body widget-content clearfix"><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Pending orders</span><span class="badge">12</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Completed order</span><span class="badge">14</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">New Dishes</span><span class="badge">17</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Dessert</span><span class="badge">07</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Discount Event</span><span class="badge">06</span></a></div>
            </div>
            </div>
</div-->
      <!--p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p-->
    </div>
    <div id="menu2" class="tab-pane fade brand-border">
      <h3>Pending Orders</h3>
      
      <?php
                            $UserId=$_SESSION['user_session'];
                            $ustatus =0;
                           $status="1";
                            $stmt = $db_con->prepare("SELECT * FROM transaction WHERE user_id=:userId AND status=:ustatus  ");
                            $stmt->execute(array(":userId"=>$UserId,":ustatus"=>$ustatus ));
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                            {
                              // get chef details
                                $transactionOrder= $row['transaction_id'];  //dish id
                                
                                echo $transactionOrder;
                                echo '&nbsp;<li class="widget-categories link" ><span class="badge">12-jun-2018 20:58pm</span><a class="pull-right link" href="order-confirmation.php?id='. $transactionOrder.'">view order</a>';
                                echo '</li><br>';
                            }

?>

    </div>
    <div id="menu3" class="tab-pane fade brand-border">
      <p>Change User Password</p>
      
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

  <br>
  <div class="input-group col-md-8">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
  <!--span id="check-e"></span-->
  
            </div>
<br>
<div class="input-group col-md-8">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" class="form-control" placeholder="Re Password" name="password" id="password" />
  <!--span id="check-e"></span-->
  
            </div>

 <br>
 
<div class="input-group col-md-5">
      <button type="submit" class="brand-color " name="btn-login" id="btn-login">
  <span class="glyphicon glyphicon-log-in"></span> &nbsp;Change password</button> 

<!--div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit"> <span>Sign In</span></a></div-->

  </div>  

</form>   
      
  
      
    </div>
  </div>
</div>
</div>
                    
            <div class="blog-wrapper swin-sc-blog-list">


              <!--div class="swin-sc-blog-slider style-02">
                <div class="main-slider">
                  <div class="slides">
                    <div class="blog-item swin-transition">
                      <div class="blog-featured-img"><img src="assets/images/blog/blog-slider-1.jpg" alt="fooday" class="img img-responsive"></div>
                      <div class="blog-content">
                        <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle
                            For Cold Weather</a></h3>
                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                          eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut.</p>
                        <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div -->
              <!--div class="swin-sc-blog-slider style-02">
                <div class="main-slider">
                  <div class="slides">
                    <div class="blog-item swin-transition">
                      <div class="blog-featured-img"><img src="assets/images/blog/blog-slider-2.jpg" alt="fooday" class="img img-responsive"></div>
                      <div class="blog-content">
                        <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle
                            For Cold Weather</a></h3>
                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                          eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut.</p>
                        <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--div class="swin-sc-blog-slider main-carousel style-02">
                <div class="main-slider">
                  <div class="slides">
                    <div class="blog-item swin-transition">
                      <div class="item-sliders">
                        <div class="blog-featured-img item-sliders"><img src="assets/images/blog/blog-slider-4.jpg" alt="fooday"
                            class="img img-responsive"></div>
                        <div class="blog-featured-img item-sliders"><img src="assets/images/blog/blog-slider-3.jpg" alt="fooday"
                            class="img img-responsive"></div>
                      </div>
                      <div class="blog-content">
                        <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle
                            For Cold Weather</a></h3>
                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                          eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut.</p>
                        <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--div class="swin-sc-blog-slider video style-02">
                <div class="main-slider">
                  <div class="slides">
                    <div class="blog-item swin-transition">
                      <div class="blog-featured-img">
                        <div class="format-video"><img src="assets/images/blog/blog-slider-5.jpg" alt="fooday" class="img img-responsive">
                          <div class="swin-sc swin-sc-video">
                            <div class="play-wrap"><a href="https://vimeo.com/27814858" class="play-btn swipebox"><i
                                  class="play-icon fa fa-play"></i></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="blog-content">
                        <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle
                            For Cold Weather</a></h3>
                        <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                          eiusmod tempor incididunt ut labore et dolore magna aliqua. Utom enimtu ad minim veniam, quis
                          nostrud exercitation ullamco laboris nisi ut.</p>
                        <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--div class="swin-sc-blog-slider style-02">
                <div class="main-slider">
                  <div class="slides">
                    <div class="blog-item swin-transition">
                      <div class="blog-featured-img">
                        <div class="quote-format"><img src="assets/images/blog/blog-slider-6.jpg" alt="fooday" class="img img-responsive">
                          <div class="quote-text"><i class="fa fa-quote-left quote-icon"></i>The role of a good cook
                            ware in the preparation of a sumptuous meal cannot be overemphasized.</div>
                        </div>
                      </div>
                      <div class="blog-content">
                        <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle
                            For Cold Weather</a></h3>
                        <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div- ->
              <div class="swin-sc-blog-slider style-02">
                <div class="main-slider">
                  <div class="slides">
                    <div class="blog-item swin-transition">
                      <div class="blog-featured-img">
                        <div class="audio-format"><img src="assets/images/blog/blog-slider-7.jpg" alt="fooday" class="img img-responsive">
                          <audio src="assets/audio/audio.mp3" preload="auto"></audio>
                        </div>
                      </div>
                      <div class="blog-content">
                        <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                        <div class="blog-info clearfix">
                          <div class="blog-info-item blog-view">
                            <p><i class="fa fa-eye"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-comment">
                            <p><i class="fa fa-comment"></i><span>18</span></p>
                            <p></p>
                          </div>
                          <div class="blog-info-item blog-author">
                            <p><span>Post By </span><a href="#">Admin</a></p>
                            <p></p>
                          </div>
                        </div>
                        <h3 class="blog-title"><a href="#" class="swin-transition">How To Cook The Spicy Chinese Noodle
                            For Cold Weather</a></h3>
                        <div class="blog-readmore"><a href="#" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div-->
              <!--div class="pagination-wrapper">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                  </ul>
                </nav>
              </div-->
            </div>
          </div>
          <div class="page-sidebar col-md-4">
            <!-- search-->
            <div class="swin-widget widget-search">
              <div class="title-widget">
                <form accept-charset="utf-8" class="search-form">
                  <input type="search" placeholder="Search" name="s" value="" class="search-input"><span class="search-submit"><i
                      class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
            <!-- categories-->
            <div class="swin-widget widget-categories">
              <div class="title-widget">Awiating confirmation</div>
              <div class="widget-body widget-content clearfix"><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Pending orders</span><span class="badge">12</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Completed order</span><span class="badge">14</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">New Dishes</span><span class="badge">17</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Dessert</span><span class="badge">07</span></a><a href="#" class="link"><i class="icons fa fa-angle-right"></i><span
                    class="text">Discount Event</span><span class="badge">06</span></a></div>
            </div>
            <!-- recent post- ->
            <div class="swin-widget widget-recent-post">
              <div class="title-widget">Recent Post</div>
              <div class="widget-body widget-content clearfix">
                <div class="swin-media">
                  <div class="content-left"><a href="#"><img src="assets/images/widget/wg-recent-post1.jpg" alt="..."
                        class="media-object"></a></div>
                  <div class="content-right"><a href="#" class="heading">
                      Chinese Spicy Food Is Make
                      By Jankan-Cook</a>
                    <div class="info">
                      <div><i class="swin-icon fa fa-clock-o"></i><span class="text">20 minutes ago</span></div>
                    </div>
                  </div>
                </div>
                <div class="swin-media">
                  <div class="content-left"><a href="#"><img src="assets/images/widget/wg-recent-post2.jpg" alt="..."
                        class="media-object"></a></div>
                  <div class="content-right"><a href="#" class="heading">
                      Recipe Collection From
                      Master Chef KingDom</a>
                    <div class="info">
                      <div><i class="swin-icon fa fa-clock-o"></i><span class="text">06 minutes ago</span></div>
                    </div>
                  </div>
                </div>
                <div class="swin-media">
                  <div class="content-left"><a href="#"><img src="assets/images/widget/wg-recent-post3.jpg" alt="..."
                        class="media-object"></a></div>
                  <div class="content-right"><a href="#" class="heading">
                      The Best Nutrition For Your
                      Daily Meal</a>
                    <div class="info">
                      <div><i class="swin-icon fa fa-clock-o"></i><span class="text">04 hours ago</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- tag-->
            <div class="swin-widget widget-tag">
              <div class="title-widget">TAG</div>
              <div class="widget-body widget-content clearfix">
                <ul class="list-unstyled list-inline">
                  <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">Sea Food</a></li>
                  <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">Vegetables Meal</a></li>
                   <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">traditional food</a></li>
                  <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">drink</a></li>
                  <li><a href="http://localhost/floury/tag/wordpress-tv/" class="tag">nutrition</a></li>
                </ul>
              </div>
            </div>
            <!-- gallery- ->
            <div class="swin-widget widget-gallery carousel">
              <div class="title-widget">Gallery</div>
              <div class="widget-body widget-content clearfix">
                <div class="main-slider">
                  <div class="item-slide"><img src="assets/images/widget/wg-gallery1.jpg" alt="" class="img-responsive showcase"></div>
                  <div class="item-slide"><img src="assets/images/widget/wg-gallery1.jpg" alt="" class="img-responsive showcase"></div>
                  <div class="item-slide"><img src="assets/images/widget/wg-gallery1.jpg" alt="" class="img-responsive showcase"></div>
                  <div class="item-slide"><img src="assets/images/widget/wg-gallery1.jpg" alt="" class="img-responsive showcase"></div>
                  <div class="item-slide"><img src="assets/images/widget/wg-gallery1.jpg" alt="" class="img-responsive showcase"></div>
                </div>
              </div>
            </div-->
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
<script src="assets/vendors/jquery-1.10.2.min.js"></script>
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
<script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
  crossorigin="anonymous"></script>
<!-- Own script-->
<script src="assets/js/layout.js"></script>
<script src="assets/js/elements.js"></script>
<script src="assets/js/widget.js"></script>
</body>

<!-- Mirrored from sun-themes.com/html/fooday/blogs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Oct 2018 23:33:42 GMT -->

</html>