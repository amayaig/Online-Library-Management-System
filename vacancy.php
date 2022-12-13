<?php
      include_once 'config.php';

 
      if(isset($_POST['phone']))
      {
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$position=$_POST["position"];
		$address=$_POST["address"];

        $sql = "INSERT INTO vacancies( first_name, last_name, email, phone,position, address) VALUES ('$fname', ' $lname', '$email','$phone','$position','$address')";

       if(mysqli_query($conn,$sql)){
		 echo "<script> alert('Your vacancy application submitted successfully!'); window.location='vacancies.html' </script>";

		}
		else{
			echo "<script> alert('ERROR:  Sorry not  added!') </script>";
		}
	
	mysqli_close($conn);

    }
	
?>



