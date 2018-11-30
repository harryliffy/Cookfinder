<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajax File Upload with jQuery and PHP - Demo</title>
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
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="upload-wrapper">
<div align="center">
<h3>Ajax File Uploader</h3>
<form action="add-dish-upload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
<div class="form-group row">
                                    <label for="text" class="col-md-2 form-control-label">Dish name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="dish_name" id="dish_name" placeholder="Dish name" required>
                                    </div>
                                </div>
                               
                        <div class="form-group row">
                                    <label for="role" class="col-md-2 form-control-label">Dish class</label>
                                    <div class="col-md-10">
                                        <div class="change-icon-select">
                                            <select class="form-control" required name="dish_name_class" id="dish_name_class" >
											<option value="">Select Food class</option>
											
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
                                            <select class="form-control" required name="dish_meal_type" id="dish_meal_type" >
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
                                            <select class="form-control" required name="dish_type" id="dish_type">
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
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>
<div id="output"></div>

</div>
</div>

</body>
</html>