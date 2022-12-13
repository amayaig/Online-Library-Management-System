<?php
session_start();
	
	if(isset($_SESSION['user_ID']))
	{
		unset($_SESSION['user_ID']);
	}

	header ("Location:login.php");
	die;


?>