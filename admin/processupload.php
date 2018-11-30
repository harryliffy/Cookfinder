<?php
include_once('dbconfig.php');

if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/'; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die();
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["FileInput"]["size"] > 5242880) {
		die("File size is too big!");
	}   
	
	//allowed file type Server side check
	switch(strtolower($_FILES['FileInput']['type']))
		{
			//allowed file types
            case 'image/png': 
			case 'image/gif': 
			case 'image/jpeg': 
			case 'image/pjpeg':
			case 'text/plain':
			case 'text/html': //html file
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			case 'application/vnd.ms-excel':
			case 'video/mp4':
				break;
			default:
				die('Unsupported File!'); //output error
	}
	
	$File_Name          = strtolower($_FILES['FileInput']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$Random_Number      = rand(0, 9999999999); //Random number to be added to name.
	$NewFileName 		= $Random_Number.$File_Ext; //new file name
	
	if(move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory.$NewFileName ))
	   {
		$chef_fullname = trim($_POST['Chef_fullname']);
		$chef_email = trim($_POST['chef_email']);
		$chef_address = trim($_POST['chef_address']);
		$chef_location = trim($_POST['chef_location']);
		$chef_password = trim($_POST['chef_password']);
		$chef_phone = trim($_POST['chef_phone']);
		$chef_business_name = trim($_POST['chef_business_name']);
		$chef_business_address = trim($_POST['chef_business_address']);
		$chef_business_phone = trim($_POST['chef_business_phone']);
		$chef_business_email = trim($_POST['chef_business_email']);
		$chef_culinary_school = trim($_POST['chef_culinary_school']);
		$chef_year_of_grad = trim($_POST['chef_year_of_grad']);
		$chef_image = trim($_POST['chef_image']);
		$user_role="chef";
		$token="aqetryruioo";
		$date=Date('d/m/y h:i');
$chefId="";

		//$user_password = trim($_POST['password']);
		
		// $password = md5($user_password);
		$pic= $NewFileName;
		try
		{	
		
			$stmt = $db_con->prepare("INSERT INTO chefs(chef_id, chef_fullname, chef_email, chef_password,chef_phone, chef_address, chef_city, chef_business_name, chef_business_address, chef_business_phone, chef_business_email,chef_cooking_school,chef_year_of_grad, chef_image, token, join_date)
			 VALUES( :chef_id, :chef_fullname, :chef_email, :chef_password, :chef_phone, :chef_address, :chef_city, :chef_business_name, :chef_business_address, :chef_business_phone, :chef_business_email, :chef_cooking_school, :chef_year_of_grad,:chef_image, :token, :join_date)");
			
			$stmt ->bindParam(':chef_fullname', $chef_fullname);
			$stmt ->bindParam(':chef_email', $chef_email);
			$stmt ->bindParam(':chef_password', $chef_password);
			$stmt ->bindParam(':chef_phone', $chef_phone);
			$stmt ->bindParam(':chef_address', $chef_address);
			$stmt ->bindParam(':chef_city', $chef_location);
			$stmt ->bindParam(':chef_business_name', $chef_business_name);
			$stmt ->bindParam(':chef_business_address', $chef_business_address);
			$stmt ->bindParam(':chef_business_phone', $chef_business_phone);
			$stmt ->bindParam(':chef_business_email', $chef_business_email);
			$stmt ->bindParam(':chef_cooking_school', $chef_culinary_school);
			$stmt ->bindParam(':chef_year_of_grad', $chef_year_of_grad);
			$stmt ->bindParam(':chef_image', $pic);
			//$stmt ->bindParam(':user_role', $user_role);
			$stmt ->bindParam(':token', $token);
			$stmt ->bindParam(':join_date', $date);
			$stmt ->bindParam(':chef_id', $chefId);
			if ( $stmt->execute() ) {

				echo "ok"; // log in

			}
			// $stmt ->bindParam(':full_name', $userfullname);

			// $stmt->execute(array(":email"=>$user_email));
			// $row = $stmt->fetch(PDO::FETCH_ASSOC);
			//$count = $stmt->rowCount();
			
			/* if($row['user_password']==$password){
				
				echo "ok"; // log in
				$_SESSION['user_session'] = $row['user_id'];
			}
			else{
				
				echo "email or password does not exist."; // wrong details 
			} */
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
		     
		   echo '<img src="uploads/'.$pic.'" height="200px" width="200px" />
		  
		   <div class="card-block">
            <form action="" method="post">
<div id="error">
        <!-- error will be shown here ! -->
        </div>
                    <fieldset class="form-group row">
                        <label class="col-md-3 col-xs-4 form-control-label">Full Name</label>
                        <div class="col-md-9 col-xs-8">
                            <p class="text alert-success">'.$chef_fullname.' Registered Successfully</p>
                        </div>
                    </fieldset>
                    <fieldset class="form-group row">
                        
                        <div class="col-md-9 col-xs-8">
                            <p><a href="login.php"> Go to Login</a></p>
                        </div>
                    </fieldset>';
		die('Success! File Uploaded.');
	}else{
		die('error uploading File!');
	}
	
}
else
{
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}
?>