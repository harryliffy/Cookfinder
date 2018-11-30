
<?php
session_start();
include_once('header.php');
$navigation=new Navigation();
$navigation->ActiveMenu('menu');
$dish=$_GET['dish'];
$dishId=base64_decode( $_GET['dishId']);

?>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="place_order.js"></script>

<div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title"><?php echo $dish;  ?></div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">We hope you will like this <?php echo $dish;  ?>   and give us 5 star rating</div>
              </div>
            </div>
          </div>
          
          <div class="page-content-wrapper">
            <div class="container">
            

            <script>
            // javascript to toggle chef data
   $(document).on('click', ' li> a',function(){
   $('.prices').text($(this).text());
   $('.price1').text($(this).data('prices') );
    $('#image').attr('src', 'admin/uploads/'+ $(this).data('images') );
    $('#city').text( $(this).data('city') );
    document.getElementById('chefs').value=$(this).data('chefs');
     // $('#chefs').value= $(this).data('chefs') ;
   });
   
   </script>

    <!--div class="prices"> $ 0.00</div>
     <div class="price1	"> $ 0.00</div>
     <img src="" alt="" id="image" class="image" sizes="" srcset="">
     <a href="" class="buy">Pay now</a--> 
   



              <section class="product-single padding-top-100 padding-bottom-100">
                <div class="row">
                  <div class="col-md-6">
                    <div class="product-image">
                      <div class="product-featured-image">
                        <div class="main-slider">
                          <div class="slides">
                            <div class="featured-image-item"><img id="image" src="" alt="fooday" class="img img-responsive"></div>
                            <!--div class="featured-image-item"><img src="assets/images/product/product-full-03.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="featured-image-item"><img src="assets/images/product/product-full-04.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="featured-image-item"><img src="assets/images/product/product-full-02.jpg" alt="fooday" class="img img-responsive"></div>
                            <div class="featured-image-item"><img src="assets/images/product/product-full-03.jpg" alt="fooday" class="img img-responsive"></div-->
                          </div>
                        </div>
                        <div data-width="150" class="nav-slider">
                          <ul class="slides list-inline">
                          <?php  

                          //generate chef details according to the selected food category
include('admin/dbconfig.php');
// select all chef with dish category
  $stmt = $db_con->prepare("SELECT * FROM chef_dish_menu WHERE dish_id=:dish_id");
  $stmt->execute(array(":dish_id"=>$dishId));
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    // get chef details
      $adddishId= $row['chef_id'];  //dish id
    // echo $redDishId; get dish name
    $stmt1 = $db_con->prepare("SELECT * FROM chefs WHERE chef_id=:chef_id");
    $stmt1->execute(array(":chef_id"=>$adddishId));
   $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
  
   echo '
   <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)"  data-chefs="'.$row1['chef_id'].'" data-city="'.$row1['chef_city'].'" data-images="'.$row1['chef_image'].'" data-prices="'.$row1['chef_fullname'].'" class="testimonial-nav-item product-price"><img style="width:102px; border-radius:90px;" src="admin/uploads/'.$row1['chef_image'].'" alt="fooday" class="img img-responsive swin-transition"></a></li>
   ';


   
   /* echo'
   <ul>
   <li class="swin-transition thumbnail-image-item"><a data-price="11" href="javascript:void(0)" class="testimonial-nav-item"><img src="admin/uploads/'.$row1['chef_image'].'" alt="fooday" class="img img-responsive swin-transition"></a></li>
   <li><a href="#" data-price="11">$10</a></li>
   <li><a href="#" data-price="24">$23</a></li>
   </ul-->'; */
   
    
   





  //  echo $row1['chef_fullname'];
}

?>



                            
                            <!-- li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-03.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-04.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-02.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li>
                            <li class="swin-transition thumbnail-image-item"><a href="javascript:void(0)" class="testimonial-nav-item"><img src="assets/images/product/product-thumb-03.jpg" alt="fooday" class="img img-responsive swin-transition"></a></li-->
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>


                  
                  <div class="col-md-6">
                    <div class="product-summary">
                      <div class="product-title">
                        <div class="price1 title" ><?php echo $dish;  ?></div>
                      </div>
                      <div class="product-price">
                        <div class="price"><span class="currency-symbol">$ </span>100.0</div>
                      </div>
                      <div class="product-info">
                        <ul class="list-inline">
                          <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                          <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a><span>4 Reviews</span></li>
                        </ul>
                      </div>
                      <div class="product-desc">
                        <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water</p>
                      </div>
                      <div class="product-meta-info">
                      <div class="meta-info-item">
                          <div class="meta-info-caption">Food to order:</div>
                          <div class="meta-info-text"><a href="javascript:void(0)"><?php echo $dish; ?></a></div>
                        </div>
                        
                        <div class="meta-info-item">
                        <div class="meta-info-caption">Chef Location:</div>
                          <div class="meta-info-text"><a id="city" href="javascript:void(0)"><?php  ?></a></div>
                        </div>

                        <div class="meta-info-item">
                          <div class="meta-info-caption">Category:</div>
                          <div class="meta-info-text"><a href="javascript:void(0)">Breakfast</a>,<a href="javascript:void(0)">Seafood</a>,<a href="javascript:void(0)">Main Menu</a></div>
                        </div>
                        <div class="meta-info-item">
                          <div class="meta-info-caption">Tags:</div>
                          <div class="meta-info-text"><a href="javascript:void(0)">Shrimp</a>,<a href="javascript:void(0)">Vegetables</a></div>
                        </div>
                        <div class="meta-info-item">
                        <div class="meta-info-caption">Order note:</div>
<textarea name="order_note" id="order_note" cols="40" rows="3"></textarea>
                        </div>

                         <div class="meta-info-item">
                        <div class="meta-info-caption">Serving</div>
                        <div class="product-quanlity">
                        <div class="input-group">
                          
                          <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                        </div>
                        </div>
                        </div>

                      </div>
                      <div class="product-quanlity">
                      <form class="form-signin col-md-offset-2 center" method="post" id="register-form">
      <div id="error">
      <!-- error will be shown here ! -->
      </div>
      <br>
      
      <input type="text"id="chefs" name="chefs" value=""  >
      <input type="text" name="userId" id="userId" value="<?php echo $_SESSION['user_session']; ?>  " >
      <input type="text" name="dishId" id="dishId" value="<?php echo $dishId; ?>">
      <input type="text" name="comment" id="comment" >
                        
                          <!--div class="input-group">
                          
                            <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                          </div-->
                          <button type="submit" class="swin-btn center" name="btn-register" id="btn-register">
      <span class="glyphicon glyphicon-hourglass"></span> &nbsp; Proceed
    </button> 
                          <!---div class="add-to-cart"><a href="javascript:void(0)" class="swin-btn"> <span>Book chef</span></a></div-->
                        </form>
                      </div>


                      <div class="product-share"><span class="caption">Share</span>
                        <ul class="socials list-unstyled list-inline">
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="product-tab-content">
                      <!-- Nav tabs-->
                      <ul role="tablist" class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#product-desc-tab" aria-controls="product-desc-tab" role="tab" data-toggle="tab">DESCRIPTIONS</a></li>
                        <li role="presentation"><a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab"> CHEF REVIEWS</a></li>
                      </ul>
                      <!-- Tab panes-->
                      <div class="tab-content">
                        <div id="product-desc-tab" role="tabpanel" class="tab-pane active">
                          <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot. </p>
                          <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean.</p>
                        </div>
                        <div id="product-review" role="tabpanel" class="tab-pane">
                          <div id="reviews">
                            <div id="comments">
                              <h3 class="product-reviews-title">1 review</h3>
                              <ul class="commentlist list-unstyled">
                                <li>
                                  <div class="comment_container"><img src="http://2.gravatar.com/avatar/59c82b1d2c60537f900fb191b3cb611b?s=60&amp;d=mm&amp;r=g" width="60" height="60" alt="" class="avatar avatar-60wp-user-avatar wp-user-avatar-60 alignnone photo avatar-default">
                                    <div class="comment-text">
                                      <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                                      <p class="meta"><strong itemprop="author">Maria</strong> –
                                        <time itemprop="datePublished" datetime="2013-06-07T15:56:24+00:00">June 7, 2017</time>:
                                      </p>
                                      <div itemprop="description" class="description">
                                        <p>This product is Awesome!!!</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="comment_container"><img src="assets/images/blog/blog-comment-avatar03.jpg" width="60" height="60" alt="" class="avatar avatar-60wp-user-avatar wp-user-avatar-60 alignnone photo avatar-default">
                                    <div class="comment-text">
                                      <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                      <p class="meta"><strong itemprop="author">Kelvin</strong> –
                                        <time itemprop="datePublished" datetime="2013-06-07T15:56:24+00:00">June 8, 2017</time>:
                                      </p>
                                      <div itemprop="description" class="description">
                                        <p>I recommended it!!!</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="product-related padding-bottom-100">
                <div class="swin-sc swin-sc-title style-2">
                  <p class="title"><span>You May Also Like</span></p>
                </div>
                <div class="swin-sc swin-sc-product products-02 carousel-01 woocommerce">
                  <div class="products nav-slider">
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato fly</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>5.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>20.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2e.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-item item swin-transition">
                      <div class="block-img"><img src="assets/images/product/product-2f.jpg" alt="" class="img img-responsive">
                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>15.0</span></div>
                        <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                      </div>
                      <div class="block-content">
                        <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                        <div class="info">
                          <div class="author">Chef <span class="name">Don Joe</span></div>
                          <div class="star-rating"><span style="width:80%" class="rating"><strong class="rating"></strong></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
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
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
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
      <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
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
              <div class="layout-boxed-bg"><a data-img="assets/images/layout-option/bg-01.jpg" class="bx-layout-img"><img src="assets/images/layout-option/bg-01.jpg" class="img img-responsive"></a><a data-img="assets/images/layout-option/bg-02.jpg" class="bx-layout-img"><img src="assets/images/layout-option/bg-02.jpg" class="img img-responsive"></a><a data-img="assets/images/layout-option/bg-03.jpg" class="bx-layout-img"><img src="assets/images/layout-option/bg-03.jpg" class="img img-responsive"></a></div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- jQuery- ->
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
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Own script-->
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/elements.js"></script>
    <script src="assets/js/widget.js"></script>
  </body>


</html>