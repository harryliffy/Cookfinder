<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$user_email = trim($_POST['user_email_address']);
		$user_password = trim($_POST['password']);
		
		$password = $user_password;
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM chefs WHERE chef_email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['chef_password']==$password){
				
				echo "ok"; // log in
				$_SESSION['chef_session'] = $row['chef_id'];
			}
			else{
				
				echo "email or password does not exist."; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>