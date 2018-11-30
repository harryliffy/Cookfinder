    <!DOCTYPE html>
<html lang="en" class="full-screen">



<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Cookfinder</title>

<link rel="icon" sizes="180x180" href="img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="../cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.min.js"></script>
    
    <link rel="stylesheet" href="styles/lib/bootstrap.min.css">
    <link rel="stylesheet" href="styles/ncms.min.css">
    <link rel="stylesheet" href="styles/site.min.css">
     <link rel="stylesheet" href="styles/lib/icomoon.css" />

    <!-- <link rel="stylesheet" href="styles/lib/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="styles/lib/ionicons.min.css"> -->
    <!-- <link rel="stylesheet" href="styles/lib/foundation-icons.css"> -->

    
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
         $('#MyUploadForm').hide(); //hide submit button
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


</head>

<body class="registration warning-theme danger-complement primary-logo-demo nicescroll">
    <div class="wrapper-card">
        <div class="card centered-signup-card signup-lg">
            <div class="card-header text-xs-center">
                <a href="index.html"><img width="225" src="../assets/images/logo.png" alt="n-cms" /></a>
            </div>
            <div class="card-block">
            <form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
<div id="error">
        <!-- error will be shown here ! -->
        </div>
                    <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Full Name</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="Insert your full name" required name="Chef_fullname" id="Chef_fullname">
                        </div>
                    </fieldset>
                    <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Email</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="email" class="form-control" placeholder="Your email here" required name="chef_email" id="chef_email">
                        </div>
                    </fieldset>

 <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Password</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="password" class="form-control" placeholder="Type your password" required>
                        </div>
                    </fieldset>
                    <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Confirm Password</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="password" class="form-control" placeholder="Type your password again" required name="chef_password" id="chef_password" >
                        </div>
                    </fieldset>

                      <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Address</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="Address" name="chef_address" id="chef_address" required>
                        </div>
                    </fieldset>

                      <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">City</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="current location" name="chef_location" id="chef_location" >
                        </div>
                    </fieldset>

                      <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Phone</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="Phone Number" name="chef_phone" id="chef_phone">
                        </div>
                    </fieldset>

                    <script>
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if ($(this).attr("value")=="checkbox"){
                $("#span-advanced-search").toggle();
            }
        });

    });
    
    </script>
    <style>
    #span-advanced-search{
       /* padding: 20px;
        
        margin-top:20px;*/
        display: none;
    }
    </style>



    <div class="form form-info">
        <label for="Do you have a business"><input type="checkbox" name="colorCheckbox" value="checkbox" id=""> Have a business ? </label>
    </div>

    <div id="span-advanced-search" class="card card-inverse card-primary text-white" >
 <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Business name</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control"  placeholder="Business Name" name="chef_business_name" id="chef_business_name">
                        </div>
                    </fieldset>

                      <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Business Address</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="business address" name="chef_business_address" id="chef_business_address">
                        </div>
                    </fieldset>

                      <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Business phone</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="Bussiness Phone Number" name="chef_business_phone" id="chef_business_phone">
                        </div>
                    </fieldset>
                  
                      <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Business Email</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="Business Email" name="chef_business_email" id="chef_business_email">
                        </div>
                    </fieldset>

    </div>


                     

                    <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Culinary School</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="Culinary School" name="chef_culinary_school" id="chef_culinary_school" />
                        </div>
                    </fieldset>

                    <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Year of Grad</label>
                        <div class="col-md-9 col-xs-8">
                            <input type="text" class="form-control" placeholder="Year of grad" name="chef_Year_of_grad" id="chef_year_of_grad" /> 
                        </div>
                    </fieldset>

                     
                    <div class="form-group row">
                        <div class="col-md-12 col-xs-12">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"> I agree to terms and conditions</span>
                            </label>
                        </div>
                    </div>

                    
<input name="FileInput" id="FileInput" type="file" />
<div class="button-action text-xs-right">
<input type="submit"  id="submit-btn" value="Upload" /> <br
</div>
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>

                    <!--div class="button-action text-xs-right">
                        <button type="button" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div-->
                    Have an account already? <a href="login.php" class="text-info">Log In here</a>
                </form>
                <div id="progressbox" ><div id="progressbar"></div ><div id="statustxt">0%</div></div>

            </div>
        </div>
    </div>
    <div id="output"></div>
    <!--End of Card Center-->
    <div class="backdrop"></div>
    <footer class="footer">
        <!--p>Crafted & Designed by Arkalite</p-->
        <p>© <?php echo date('Y') ?>. All RIGHT RESERVED.</p>
        <div class="social">
            <ul class="social-media list-inline">
                <li class="list-inline-item"><a href="#" class="text-white"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-white"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="list-inline-item"><a href="#" class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </footer>

    <!--script src="../code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script-->
    <script src="../cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

    

    <!-- <script src="js/lib/jquery.min.js"></script> -->
    <!-- <script src="js/lib/tether.min.js"></script> -->    
    <!-- <script src="js/lib/bootstrap.min.js"></script> -->


    <script src="js/lib/jquery.nicescroll.js"></script>
    <script src="js/lib/jquery.nicescroll.plus.js"></script>
    <script src="js/lib/js.cookie.js"></script>
    <script src="js/ncms.min.js"></script>
    <script src="js/site-config.js"></script>
</body>


<!-- Mirrored from fazar.bitbucket.io/register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jul 2017 11:44:27 GMT -->
</html>