<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-register']))
	{
		//$user_name = $_POST['user_name'];

		


		// $dish_select=$_POST['dish_select[]'];
		// $userfullname = trim($_POST['userfullname']);
		$chef_dish_id="";
		$chef_id=$_POST['chefId'];
		$chef_dish_cat_id="category of food id";
		$date=Date('d/m/y h:i');


		//$user_password = trim($_POST['password']);
		
		// $password = md5($user_password);
		
		try
		{	 
			$a=0;
			foreach	 ( $_POST['dish_select'] as $dishSelects ){
				
				$a=$a + 1;



//check if the dish already exist then skipp ( do nothing)
				$stmt2 = $db_con->prepare("SELECT * FROM chef_dish_menu WHERE dish_id=:dish AND chef_id=:chef" );
			$stmt2->execute(array(":dish"=>$dishSelects, ":chef"=>$chef_id));
			$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
			// $count = $stmt->rowCount();
			
			if($row2['dish_id']==$dishSelects){  
			//	skipp
  			// do nothing if the dish already exist by the vendor

			}
			else {
				
// save selected dishes from chef to database (dish does not already exist --activate add new)
		$stmt = $db_con->prepare("INSERT INTO chef_dish_menu( chef_dish_id, chef_id, dish_id, chef_dish_cat_id, add_date )
			 VALUES( :chef_dish_id, :chef_id, :dish_id, :chef_dish_cat_id, :add_date)");
			
			$stmt ->bindParam(':chef_dish_id', $chef_dish_id);
			$stmt ->bindParam(':chef_id', $chef_id);
		$stmt ->bindParam(':dish_id', $dishSelects);
			$stmt ->bindParam(':chef_dish_cat_id', $chef_dish_cat_id);
			$stmt ->bindParam(':add_date', $date);
			//$stmt->execute();	
			// $stmt ->bindParam(':chef_dish_id', $chef_dish_id);
			if ( $stmt->execute() ) {

echo "Dish".$a." -".$chef_id.' '.$dishSelects.' '.$chef_dish_cat_id.' '; // Transaction Output


// echo $dishSelects.';'..'ok' .$date;
			// echo $dish_select;
	
			}
		
						}
		
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
				
				echo "email or password does not exist."; // wrong details  */
			} 	
				
		  
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>