<?php
session_start();
include_once('header.php');
$navigation=new Navigation();
$navigation->ActiveMenu('menu');

?>
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script-->
<div class="page-container">
  <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;"
    class="page-title page-menu">
    <div class="container">
      <div class="title-wrapper">
        <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;"
          data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">All Menu
            </div>
        <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span
            class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
        <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;"
          data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">The
          various dishes are waiting for your coming to enjoy it</div>
      </div>
    </div>
  </div>
<div class="col-md-6 center">
<style>
#show_up{
	width: 200px;
/*	height: 200px; */
	border: 1px solid #ddd;
	display: none;
}
#show_up a{
	border-bottom: 1px solid #ddd;
	display: block;
	padding: 5px;
}
</style>


</div>

  <div class="page-content-wrapper">
    <section class="product-sesction-02 padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="swin-sc swin-sc-title style-3">
          <p class="title"><span>All Avialable dishes</span></p>
        </div>

<script>
$(document).ready(function(e){
	$("#search").keyup(function(){
		$("#show_up").show();
		var text = $(this).val();
		$.ajax({
			type: 'GET',
			url: 'search.php',
			data: 'txt=' + text,
			success: function(data){
				$("#show_up").html(data);
			}
		});
	})
});
</script>




  <div class="swin-sc swin-sc-title style-3 row">
  <!--input type="text" name="names" id="search" /-->
 
  <div class="input-group col-md-12 ">
                              <div class="input-group-addon">
                                <div class="fa fa-search"></div>
                              </div>
                              <input type="text" placeholder="Search dishes" class="form-control" name="names" id="search">
                            </div>

  <!--div class="swin-btn-wrap"></div-->
        </div>

        <div class="swin-sc swin-sc-product products-02 carousel-02">
          <div class="row">
            <div class="col-md-2"></div>
            <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
              <div class="item">
                <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                  <h5 class="cat-title">All</h5>
                </div>
              </div>
              <div class="item">
                <div class="cat-icons"><i class="icons swin-icon-fish"></i>
                  <h5 class="cat-title">Stew</h5>
                </div>
              </div>
              <div class="item">
                <div class="cat-icons"><i class="icons swin-icon-meat"></i></div>
                <h5 class="cat-title">Soup</h5>
              </div>
              <div class="item">
                <div class="cat-icons"><i class="icons swin-icon-ice-cream"></i></div>
                <h5 class="cat-title">Desset</h5>
              </div>
              <div class="item">
                <div class="cat-icons"><i class="icons swin-icon-dinner"></i></div>
                <h5 class="cat-title">Drink</h5>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
          <div class="products nav-slider">
            
          <div id="show_up"></div>

               <?php
                            
                            $stmt1 = $db_con->prepare("SELECT * FROM dishes ");
$stmt1->execute();
echo'<div class="row slick-padding">';
while($stmtRow1=$stmt1->fetch(PDO::FETCH_ASSOC))
{
echo'

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>25.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>

                 

                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">'.$stmtRow1['dish_name'].'</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
'; 
/*
echo '<div class="col-md-4 col-sm-6 col-xs-12">
<div class="blog-item item swin-transition">
  <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
          class="price-symbol">$</span>5.0</span></div>
    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
  </div>

  <div class="block-content">
    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
    <div class="product-info">
      <ul class="list-inline">
        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>5.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>

                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>';  */
            
            } 
            ?>
              
              <!--div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>20.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2e.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>45.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2f.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>15.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>30.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2k.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>45.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2l.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>15.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2n.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>30.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row slick-padding">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2e.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>45.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2f.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>15.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>30.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row slick-padding">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>25.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato fly</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>5.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>20.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row slick-padding">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2e.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>45.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2f.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>15.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>25.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato fly</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>5.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>20.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>30.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row slick-padding">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2e.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>45.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Jambon Salad Hot Bread</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2f.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>15.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>30.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div-->
          </div>
        </div>
        <div class="swin-btn-wrap center mtxxl"><a href="#" class="swin-btn center btn-transparent"> <span>Load More</span></a></div>
      </div>
    </section>
    <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="assets/images/product/product-decorate.jpg"
        alt="" class="img-responsive img-decorate">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4"></div>
          <div class="col-lg-6 col-md-8">
            <div class="swin-sc swin-sc-title text-left light">
              <p class="top-title"><span>chef choise</span></p>
              <h3 class="title">Daily Special</h3>
            </div>
            <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
              <div class="row">
                <div class="col-md-12">
                  <div data-height="200" class="products nav-slider">
                    <div class="item product-01">
                      <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                        <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                          <div class="dot">.....................................................................</div>
                          <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                        </div>
                      </div>
                      <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                    </div>
                    <div class="item product-01">
                      <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                        <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                          <div class="dot">.....................................................................</div>
                          <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                        </div>
                      </div>
                      <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                    </div>
                    <div class="item product-01">
                      <div class="item-left"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                        <div class="content-wrapper"><a class="title">Grandpa's Country Fried Breakfast </a>
                          <div class="dot">.....................................................................</div>
                          <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                        </div>
                      </div>
                      <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                    </div>
                    <div class="item product-01">
                      <div class="item-left"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-responsive">
                        <div class="content-wrapper"><a class="title">Chinese Chicken Bread Spicy Soup</a>
                          <div class="dot">.....................................................................</div>
                          <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                        </div>
                      </div>
                      <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                    </div>
                    <div class="item product-01">
                      <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                        <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                          <div class="dot">.....................................................................</div>
                          <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                        </div>
                      </div>
                      <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                    </div>
                    <div class="item product-01">
                      <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                        <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                          <div class="dot">.....................................................................</div>
                          <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                        </div>
                      </div>
                      <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="product-sesction-02 padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="swin-sc swin-sc-title style-3">
          <p class="title"><span>Lunch Time</span></p>
        </div>
        <div class="swin-sc swin-sc-product products-02">
          <div class="products">
            <div class="row slick-padding">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>25.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato fly</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>5.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Mexico Beafsteak Potato</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-item item swin-transition">
                  <div class="block-img"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                    <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
                          class="price-symbol">$</span>20.0</span></div>
                    <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
                        href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
                  </div>
                  <div class="block-content">
                    <h5 class="title"><a href="javascript:void(0)">Madagasca Lopster Tasty</a></h5>
                    <div class="product-info">
                      <ul class="list-inline">
                        <li class="author"><span>Chef</span><span class="text">Don Joe</span></li>
                        <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                              class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                      </ul>
                    </div>
                  </div>
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


</html>