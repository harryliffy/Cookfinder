<?php

include_once('header.php');

include('core/core.php');

?>
<?php
//pgae navigation tab tracker
$navigation=new Pagetracker();
$navigation->navTracker('orders');
?>
<!-- end of sidebar -->
<!-- start of main container-->
<div class="main container-fluid">
	<!-- start of container header-->
	<div class="content-header">
		<h1>Order Request</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Tables</a></li>
			<li class="breadcrumb-item active">Request</li>
		</ol>
		<hr />
	</div>
	<!-- end of container header -->
	<!-- start of content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">

				<div class="card">
					<div class="card-header no-border-bottom card-header-descriptive">
						<h4>Incoming request</h4>
					</div>
					<div class="card-block">
						<div class="float-xs-right input-with-icon mb-1">
							<i class="fa fa-search" aria-hidden="true"></i>
							<input type="search" class="form-control" placeholder="Search" id="dataTableJobSearch" />
						</div>
						<div class="table-responsive">
							<table id="data-table-job data-table-applier " class="table stripe">
								<thead>
									<tr class="vertical-align-top">
										<th>Id</th>
										
										<th>Order No</th>
										<th>From</th>
										<th>Chef</th>
										
										<th>Date</th>
										<th>Delivery</th>

										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									// echo $_SESSION['chef_session'];;

$tableCounter=0;
$chefId=$_SESSION['chef_session'];
$ustatus="1";  // approved order status from chef
$stmt = $db_con->prepare("SELECT DISTINCT transaction_id, chef_id,user_id FROM transaction WHERE chef_id=:chefId AND status=:ustatus");
$stmt->execute(array(":chefId"=>$chefId,":ustatus"=>$ustatus,));
while ($stmtRow = $stmt->fetch(PDO::FETCH_ASSOC))
{
$tableCounter ++;


echo'
<tr>
											<td> '.$tableCounter.'</td>
											
											<td>'; echo $stmtRow['transaction_id']; echo'</td>
											<td>'.$stmtRow['user_id'].'</td>
											<td>'.$stmtRow['chef_id'].'</td>
											
											<td>'.$stmtRow['comment'].'</td>
											<td>2010</td>

											<td>
												<ul class="list-inline">
													<li class="list-inline-item"><a href="#"><i class="material-icons">check</i></a></li>
													<li class="list-inline-item"><a href="#"><i class="material-icons">clear</i></a></li>
													<li class="list-inline-item"><a href="#"><i class="material-icons">visibility</i></a></li>
												</ul>
											</td>
										</tr>
';

}

?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end of content-->
</div>
<!-- end of main container -->
<!--div class="site-configuration">
		<div class="site-config-control">
			<i class="material-icons">settings</i>
		</div>
		<h5>Skins</h5>
		<ul class="list-inline color-themes">
			<li class="list-inline-item" data-color="danger" data-complementary="primary" data-logo="primary">
				<div class="danger-color"></div>
				<div class="primary-color"></div>
			</li>
			<li class="list-inline-item" data-color="warning" data-complementary="primary" data-logo="primary">
				<div class="warning-color"></div>
				<div class="primary-color"></div>
			</li>
			<li class="list-inline-item" data-color="primary" data-complementary="warning" data-logo="warning">
				<div class="primary-color"></div>
				<div class="warning-color"></div>
			</li>
		</ul>
		<ul class="list-inline color-themes">
			<li class="list-inline-item" data-color="warning" data-complementary="danger" data-logo="primary">
				<div class="warning-color"></div>
				<div class="danger-color"></div>
			</li>
			<li class="list-inline-item" data-color="success" data-complementary="danger" data-logo="primary">
				<div class="success-color"></div>
				<div class="danger-color"></div>
			</li>
			<li class="list-inline-item" data-color="success" data-complementary="primary" data-logo="primary">
				<div class="success-color"></div>
				<div class="primary-color"></div>
			</li>
		</ul>
		<ul class="list-inline color-themes">
			<li class="list-inline-item" data-color="success" data-complementary="warning" data-logo="primary">
				<div class="success-color"></div>
				<div class="warning-color"></div>
			</li>
			<li class="list-inline-item" data-color="info" data-complementary="warning" data-logo="primary">
				<div class="info-color"></div>
				<div class="warning-color"></div>
			</li>

			<li class="list-inline-item" data-color="info" data-complementary="danger" data-logo="primary">
				<div class="info-color"></div>
				<div class="danger-color"></div>
			</li>
		</ul>
		<ul class="list-inline color-themes">
			<li class="list-inline-item" data-color="info" data-complementary="primary" data-logo="primary">
				<div class="info-color"></div>
				<div class="primary-color"></div>
			</li>
			<li class="list-inline-item" data-color="primary" data-complementary="danger" data-logo="danger">
				<div class="primary-color"></div>
				<div class="danger-color"></div>
			</li>

			<li class="list-inline-item" data-color="danger" data-complementary="warning" data-logo="primary">
				<div class="danger-color"></div>
				<div class="warning-color"></div>
			</li>
		</ul>
	</div-->


<script src="../code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8"
 crossorigin="anonymous"></script>
<script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK"
 crossorigin="anonymous"></script>



<!-- <script src="js/lib/jquery.min.js"></script> -->
<!-- <script src="js/lib/tether.min.js"></script> -->
<!-- <script src="js/lib/bootstrap.min.js"></script> -->


<script src="js/lib/jquery.nicescroll.js"></script>
<script src="js/lib/jquery.nicescroll.plus.js"></script>
<script src="js/lib/jquery.scrollUp.min.js"></script>
<script src="js/lib/js.cookie.js"></script>
<script src="js/lib/pace.min.js"></script>
<script src="js/ncms.min.js"></script>
<script src="js/site-config.js"></script>
<script src="js/lib/jquery.dataTables.min.js"></script>
<script src="js/pages/data-tables.js">


</script>
</body>



</html>