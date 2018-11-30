<?php
// create a  new function
function search($text){
	
	// connection to the Ddatabase
	include('dbconfig.php');
	// $db = new PDO("mysql:host=localhost;dbname=cookfinderdb", 'harrcfqo', 'SwvjuG0Zk4Nk');
	// let's filter the data that comes in
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the dishes 
	$get_name = $db_con->prepare("SELECT * FROM dishes WHERE dish_name LIKE concat('%', :name, '%')");
	// execute the query
	$get_name -> execute(array(':name' => $text));
	// show the users on the page
	while($names = $get_name->fetch(PDO::FETCH_ASSOC)){
		// show each item as a link
		// echo '<a href="">'.$names['dish_name'].'</a>';
		echo '
		<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="blog-item item swin-transition">
		  <div class="block-img"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
			<div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span
				  class="price-symbol">$</span>25.0</span></div>
			<div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a
				href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div>
		  </div>
	
		 
	
		  <div class="block-content">
			<h5 class="title"><a href="menu-dish.php?&dish='.$names['dish_name'].'&dishId='.base64_encode( $names['dish_id']).'">'.$names['dish_name'].'</a></h5>
			<div class="product-info">
			  <ul class="list-inline">
				<li class="author"><span>'.$names['dish_type'].'</span></li>
				<li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
						class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
						<li class="author"><span><span class="text">Don Joe</span></span></li>
						
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
		';
		
	}
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>