/*
Author: Harry Lifford
URL: https://www.harrylifford.website/ajax/register
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "please enter your password"
                     },
            user_email: "please enter your email address",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#register-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'meal_chef_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success :  function(response)
			   {						
					if(response!=""){
									
						// $("#btn-register").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						// setTimeout(' window.location.href = "index.php"; ',4000);

						$("#error").fadeIn(1000, function(){						
							$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> <label style="color:#000;"> &nbsp; '+response+' </label></div>');
							$("#btn-register").html('<span class="glyphicon glyphicon-check"></span> &nbsp; Dishes Added to profile.');
							
													//	$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
												});

					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});