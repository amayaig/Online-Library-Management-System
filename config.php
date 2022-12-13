<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="library management system";

// Create connection
if(!$conn = mysqli_connect($servername, $username, $password, $dbname))
{
	die("failed to connect!");
}

?>