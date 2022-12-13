<?php       //References :- youtube.com
	
function check_login($conn)
{
	if(isset($_SESSION['user_ID']))
	{
		$id = $_SESSION['user_ID'];
		$query = "select * from users where user_ID = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result); //associative array
			return $user_data;
		} 
	}else
	{	
		//redirect to login
		header("Location:login.php");
		die;
	}
}

function random_num($length)
{
	$text="";
	if($length<5)
	{
		$length =5;
	}
	
	$len = rand(4,$length);

	for ($i=0; $i<$len; $i++)
	{
		#code
		$text .= rand(0,9);
	}

	return $text;
}






?>