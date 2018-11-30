<?php
	session_start();
	unset($_SESSION['chef_session']);
	
	if(session_destroy())
	{
		header("Location: login.php");
	}
?>