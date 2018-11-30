<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-register']))
	{
		//$user_name = $_POST['user_name'];
		// $transactionStat=$_SESSION['transaction_session']; // check if same shopping order
		if (isset($_SESSION['transaction_session'])){
			$transactionId =$_SESSION['transaction_session'] ;
		}
		else{  //if customer has checked out use new transaction
			$transactionId =md5(rand(1,999)) ;
		}
		
		
		$userId = trim($_POST['userId']);
		$chefId = trim($_POST['chefs']);
		$dishId = trim($_POST['dishId']);
		$comment = trim($_POST['comment']);
		$status = "0";
		$token=rand(0,999)."aqetryruioo";
		$date=Date('d/m/y h:i');
//$userId="";

		//$user_password = trim($_POST['password']);
		
		// $password = md5($user_password);
		
		try
		{	
		
//`token` varchar(200) NOT NULL,
$stmt = $db_con->prepare("INSERT INTO transaction(transaction_id, user_id, chef_id, dish_id, comment, status, token, add_date )
			 VALUES( :transaction_id, :user_id, :chef_id, :dish_id, :comment, :status, :token, :add_date)");
			
			
			$stmt ->bindParam(':transaction_id', $transactionId);
			$stmt ->bindParam(':user_id', $userId);
			$stmt ->bindParam(':chef_id', $chefId);
			$stmt ->bindParam(':dish_id', $dishId);
			$stmt ->bindParam(':comment', $comment);
			$stmt ->bindParam(':status', $status);
			$stmt ->bindParam(':token', $token);
			$stmt ->bindParam(':add_date', $date);
			// $stmt ->bindParam(':user_id', $userId);
			if ( $stmt->execute() ) {
				$_SESSION['transaction_session'] = $transactionId;

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