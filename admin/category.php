<?php
session_start();
include_once('header.php');
//pgae navigation tab tracker
include('core/core.php');
$navigation=new Pagetracker();
$navigation->navTracker('category');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"-->
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<!--link href="style.css" rel="stylesheet" type="text/css" media="screen"-->
<script type="text/javascript" src="add_meal_to_chef.js"></script>

<!-- end of sidebar -->
<!--Start of Main Container-->
<div class="main container-fluid">
    <!--Start of Content Header-->
    <section class="content-header">
        <h1>Chef Category</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active">Advance</li>
        </ol>
        <hr />
    </section>
    <!--End of Content Header-->
    <!--Start of Content-->
    <div class="content">
        <div class="row">
        <div class="col-md-12">
                <!--Start of Select2-->
                <div class="card">
                    <div class="card-header">
                        <h4>Chef current dish(es)</h4>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-5 warning-theme">
                                <div class="form-group">
<?php
// get all chef dishes
$stmt = $db_con->prepare("SELECT * FROM chef_dish_menu WHERE chef_id=:chef_id");
$stmt->execute(array(":chef_id"=>$_SESSION['chef_session']));
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    $redDishId= $row['dish_id'];  //dish id
    // echo $redDishId; get dish name
    $stmt1 = $db_con->prepare("SELECT * FROM dishes WHERE dish_id=:dish_id");
    $stmt1->execute(array(":dish_id"=>$redDishId));
   $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
  
  echo' 
  
  
  <button class="btn btn-success mb-1">'. $row1['dish_name'].'</button>';
}

?>
                                    
                                    <!--button class="btn btn-outline-info mb-1">Igbo</button>
                                    <button class="btn btn-outline-info mb-1">Yoruba</button>
                                    <button class="btn btn-outline-info mb-1">In Home</button-->
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End of Select2-->
                </div>



            <div class="col-md-12">
                <!--Start of Select2-->
                <div class="card">
                    <div class="card-header">
                        <small><h4>Chef current dish/category</h4></small>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-2 warning-theme">
                                <div class="form-group">

                                    <button class="btn btn-outline-info mb-1">Local</button>
                                    <button class="btn btn-outline-info mb-1">Igbo</button>
                                    <button class="btn btn-outline-info mb-1">Yoruba</button>
                                    <button class="btn btn-outline-info mb-1">In Home</button>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End of Select2-->
                </div>
  

                <div class="col-md-12">
                    <!--Start of Select2-->
                    <div class="card">
                        <div class="card-header">
                            <h4><i class="material-icons">games</i> Add Dish Category</h4>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p><label><b>Select dish type to add category </b></label></p>
                                        <br><small><label>Egusi -<code>( Igbo, Nigeria, Local ). </code></label></small>

                                        <br><small><label>Ewedu -<code>( Yoruba, Nigeria, Local ). </code></label></small>
                                    </div>
                                </div>

                            </div>
                            <form class="form-signin" method="post" id="register-form">



                                <div id="error">
                                    <!-- error will be shown here ! -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Multiple Select</label>
                                            <select class="form-control multiple-select" multiple="multiple" name="dish_select[]" id="dish_select" >
                                                <option value="">Dish</option>
                                                <?php
$stmt = $db_con->prepare("SELECT dish_name,dish_id FROM dishes ");
$stmt->execute();
while($stmtRow=$stmt->fetch(PDO::FETCH_ASSOC))    
{    echo '<option ';
    $stmt2 = $db_con->prepare("SELECT * FROM chef_dish_menu WHERE dish_id=:dish AND chef_id=:chef" );
			$stmt2->execute(array(":dish"=>$stmtRow['dish_id'], ":chef"=>$_SESSION['chef_session']));
			$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
			// $count = $stmt->rowCount();
			
			if($row2['dish_id']==$stmtRow['dish_id']){
				
				echo "selected"; // log in
    
            }
            else{
                   echo''; 
            }
    
  echo'  value="'.$stmtRow['dish_id'].'">'.$stmtRow['dish_name'].'</option>';     }   
 ?>


                                            </select>


<input type="hidden" value="<?php echo $_SESSION['chef_session'];?>" name="chefId" id="chefId">

                                        </div>
                                    </div>

                                </div>

                                 <button type="submit" class="btn btn-info" name="btn-register" id="btn-register">
    		<span class="glyphicon glyphicon-plus"></span> &nbsp; Add dish selection
			</button> 
                            </form>
                        </div>
                    </div>
                    <!--End of Select2-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                   
                </div>
                <div class="col-md-6">
                  
                </div>
            </div>
        </div>
        <!--End of Content-->
    </div>
    <!--Edn of Main Container - ->
    <div class="site-configuration">
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
    </div>


    <!--script src="../code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script-->
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
    <script src="js/lib/jquery.inputmask.bundle.min.js"></script>
    <script src="js/lib/moment.min.js"></script>
    <script src="js/lib/bootstrap-datetimepicker.min.js"></script>
    <script src="js/lib/select2.full.min.js"></script>
    <script src="js/lib/colorpicker/colorpicker.js"></script>
    <script src="js/ncms.min.js"></script>
    <script src="js/site-config.js"></script>
    <script src="js/pages/advanced-form.js"></script>
    </body>




    </html>