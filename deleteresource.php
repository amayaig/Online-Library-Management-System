<?php

include "config.php";

if(isset($_GET['deleteID'])){
	$bookID=$_GET['deleteID'];
	
	$sql = "delete from resource_details where bookID=$bookID";
	$result=mysqli_query($conn, $sql);
	if($result) {
		header('location:updateresources.php');
	}
}
?>