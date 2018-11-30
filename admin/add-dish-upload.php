<?php
include_once('dbconfig.php');

if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
	############ Edit settings ##############
	$UploadDirectory	= 'Dishes/'; //specify upload directory ends with / (slash)
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
		$dish_name = trim($_POST['dish_name']);
		$dish_class = trim($_POST['dish_name_class']);
		$meal_type = trim($_POST['dish_meal_type']);   
		$dish_type = trim($_POST['dish_type']);   
		$dish_image = $NewFileName; 
		$add_date = Date('d/m/y h:i');
		$dish_id="";
		;



			$pic= $NewFileName; 
			try
		{	
		
			$stmt = $db_con->prepare("INSERT INTO dishes( dish_id, dish_name, dish_class, meal_type, dish_type, add_date, dish_image)
			VALUES(:dish_id, :dish_name, :dish_class, :meal_type, :dish_type, :add_date, :dish_image )");
			$stmt ->bindParam(':dish_name', $dish_name);
			$stmt ->bindParam(':dish_class', $dish_class);
			$stmt ->bindParam(':meal_type', $meal_type);
			$stmt ->bindParam(':dish_type', $dish_type);
			$stmt ->bindParam(':add_date', $add_date);
			$stmt ->bindParam(':dish_image', $dish_image);
			$stmt ->bindParam(':dish_id', $dish_id);
			
			if ( $stmt->execute() ) {

				echo "ok"; // log in

			}
		}
			catch(PDOException $e){
				echo $e->getMessage();
			}


		   echo '<img src="Dishes/'.$pic.'" height="200px" width="200px" />';
		  
		   
		die('Success! File Uploaded.');
	}else{
		die('error uploading File!');
	}
	
}
else
{
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}