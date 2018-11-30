<?php

include_once('header.php');
include('core/core.php');
$navigation=new Pagetracker();
$navigation->navTracker('category');
?>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>

<script type="text/javascript">
$(document).ready(function() { 
	var options = { 
			target:   '#output',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			success:       afterSuccess,  // post-submit callback 
			uploadProgress: OnProgress, //upload progress callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		}); 
		

//function after succesful file upload (when server response)
function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button
	$('#progressbox').delay( 1000 ).fadeOut(); //hide progress bar
	$('#MyUploadForm').hide()
	

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#FileInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#FileInput')[0].files[0].size; //get file size
		var ftype = $('#FileInput')[0].files[0].type; // get file type
		

		//allow file types 
		switch(ftype)
        {
            case 'image/png': 
			case 'image/gif': 
			case 'image/jpeg': 
			case 'image/pjpeg':
			case 'text/plain':
			case 'text/html':
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			case 'application/vnd.ms-excel':
			case 'video/mp4':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 5 MB (1048576)
		if(fsize>5242880) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big file! <br />File is too big, it should be less than 5 MB.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older unsupported browsers that doesn't support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//progress bar function
function OnProgress(event, position, total, percentComplete)
{
    //Progress bar
	$('#progressbox').show();
    $('#progressbar').width(percentComplete + '%') //update progressbar percent complete
    $('#statustxt').html(percentComplete + '%'); //update status text
    if(percentComplete>50)
        {
            $('#statustxt').css('color','#000'); //change status text to white after 50%
        }
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

}); 

</script>


    <!-- end of sidebar -->
    <!--Start of Main Container-->
    <div class="main container-fluid">
        <!--Start of Content Header-->
        <section class="content-header">
            <h1>Add dish</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dish</a></li>
                <li class="breadcrumb-item active">Add dish</li>
            </ol>
            <hr/>
        </section>
        <!--End of Content Header-->
        <!--Start of Main Content-->
        <section class="content">
            <!--Start of 1st row-->
            <div class="row">
                <div class="col-md-6">
                    <!--Start of Vertical Form-->
                    <div class="card">
                        <div class="card-header">
                            <h4>Vertical Form</h4>
                        </div>
                        <div class="card-block">
                        <form action="add-dish-upload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
                                <div class="form-group row">
                                    <label for="text" class="col-md-2 form-control-label">Dish name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control"  name="dish_name" id="dish_name" placeholder="Dish name"  required>
                                    </div>
                                </div>
                               
                        <div class="form-group row">
                                    <label for="role" class="col-md-2 form-control-label">Dish class</label>
                                    <div class="col-md-10">
                                        <div class="change-icon-select">
                                            <select class="form-control" required name="dish_name_class" id="dish_name_class">
											<option value="">Select Your Role</option>
											<option value="All">All</option>
											<option value="Protein">Protein</option>
											<option value="Carbohydrate">Carbohydrate</option>
											<option value="Vitamin">Vitamin</option>
											<option value="Fats&amp;Oil">Fats / Oil</option>

										</select>
                                        </div>
                                    </div>
                                </div>

                              <div class="form-group row">
                                    <label for="role" class="col-md-2 form-control-label">Meal type</label>
                                    <div class="col-md-10">
                                        <div class="change-icon-select">
                                            <select name="dish_meal_type" id="dish_meal_type" class="form-control" required >
											<option value="">Select Your Meal type</option>
                                            <option value="Breakfast">Breakfast</option>
											<option value="Lunch">Lunch</option>
											<option value="Dinner">Dinner</option>
										</select>
                                        </div>
                                    </div>
                                </div>


                                      <div class="form-group row">
                                    <label for="role" class="col-md-2 form-control-label">Dish type</label>
                                    <div class="col-md-10">
                                        <div class="change-icon-select">
                                            <select class="form-control" required name="dish_type" id="dish_type" >
											<option value="">Select Your dish type</option>
                                            <option value="Rice">Rice</option>
											<option value="Soup">Soup</option>
											<option value="Stew">Stew</option>
											<option value="Pasta">Pasta</option>
											<option value="Salad">Salad</option>
											<option value="Snack">Snack</option>
											<option value="Bollus">Bollus</option>
										</select>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group text-md-right">
                                    <label class="custom-control custom-checkbox reverse">
									<input type="checkbox" class="custom-control-input">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Remember Me</span>
								</label>
                                </div>
                        
                                <input name="FileInput" id="FileInput" type="file" />
<input type="submit"  id="submit-btn" value="Upload" />
                        </div>
                        <div class="button-action form-group text-md-right">
                        
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
                            <!--button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info">Submit</button-->
                            </form>
                            <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
<div id="output"></div>
                        </div>
                    </div>
                    <!--End of Vertical Form-->
                                  
                </div>
                <div class="col-md-6">
             
                    <!--Start of Horizontal Form- ->
                    <div class="card">
                        <div class="card-header">
                            <h4>Horizontal Form</h4>
                        </div>
                        <div class="card-block">
                            <form id="form-login">
                                <div class="form-group row">
                                    <label for="email" class="col-md-2 form-control-label">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-2 form-control-label">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-md-2 form-control-label">Role</label>
                                    <div class="col-md-10">
                                        <div class="change-icon-select">
                                            <select class="form-control" required id="role">
											<option value="">Select Your Role</option>
											<option value="1">Admin</option>
											<option value="2">Job Hunter</option>
											<option value="3">Job Seeker</option>
										</select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-md-right">
                                    <label class="custom-control custom-checkbox reverse">
									<input type="checkbox" class="custom-control-input">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Remember Me</span>
								</label>
                                </div>
                                <div class="button-action form-group text-md-right">
                                    <button type="button" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-info">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End of Horizontal Form-->
                   
                </div>
                <!--end-col-md-6-->
                <!--start-col-md-6-->
            </div>
            <!--End of 1st row-->
            <!--Start of 2nd row-->
            <div class="row">
                <div class="col-md-12">
                    <!--Start of Card General Form- ->
                    <div class="card">
                        <div class="card-header">
                            <h4>General Element</h4>
                        </div>
                        <div class="card-block">
                            <fieldset>
                                <legend>Input Text</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Default Input Text</label>
                                            <input type="text" class="form-control" placeholder="Enter">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="form-control-label">Input with success</label>
                                            <input type="text" class="form-control form-control-success">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Disabled Input Text</label>
                                            <input type="text" class="form-control" disabled placeholder="Enter">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="form-control-label">Input with warning</label>
                                            <input type="text" class="form-control form-control-warning">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Rounded Input Text</label>
                                            <input type="text" class="form-control form-control-rounded" placeholder="Enter">
                                        </div>
                                        <div class="form-group has-danger">
                                            <label class="form-control-label">Input with danger</label>
                                            <input type="text" class="form-control form-control-danger">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                         
                           
                         
                        </div>
                    </div>
                    <!--End of Card General Form-->
                </div>
            </div>
            <!--End of 2nd row-->
        </section>
        <!--End of Main Contenr-->
    </div>
    <!--End of Main Container-->
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
    <script src="../cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>



    <script src="js/lib/jquery.nicescroll.js"></script>
    <script src="js/lib/jquery.nicescroll.plus.js"></script>
    <script src="js/lib/jquery.scrollUp.min.js"></script>
    <script src="js/lib/js.cookie.js"></script>
    <script src="js/lib/pace.min.js"></script>
    <script src="js/ncms.min.js"></script>
    <script src="js/site-config.js"></script>
</body>



</html>