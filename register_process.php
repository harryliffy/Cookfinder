<?php
	session_start();  
	require_once 'dbconfig.php';

	if(isset($_POST['btn-register']))
	{
		//$user_name = $_POST['user_name'];
		$userfullname = trim($_POST['userfullname']);
		$user_email = trim($_POST['user_email_address']);
		$user_address = trim($_POST['user_address']);
		$user_location = trim($_POST['user_location']);
		$password = trim($_POST['password']);
		$user_phone = trim($_POST['user_phone']);
		$user_role="user";
		$token="aqetryruioo";
		$date=Date('d/m/y');
$userId="";

		//$user_password = trim($_POST['password']);
		
		// $password = md5($user_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("INSERT INTO users(user_id, full_name, user_email, user_address, user_location, user_password, user_phone, user_role, token, join_date)
			 VALUES( :user_id, :full_name, :user_email, :user_address, :user_location, :user_password, :user_phone, :user_role, :token, :join_date)");
			
			$stmt ->bindParam(':full_name', $userfullname);
			$stmt ->bindParam(':user_email', $user_email);
			$stmt ->bindParam(':user_address', $user_address);
			$stmt ->bindParam(':user_location', $user_location);
			$stmt ->bindParam(':user_password', $password);
			$stmt ->bindParam(':user_phone', $user_phone);
			$stmt ->bindParam(':user_role', $user_role);
			$stmt ->bindParam(':token', $token);
			$stmt ->bindParam(':join_date', $date);
			$stmt ->bindParam(':user_id', $userId);
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
	}

?>