<?php
include("config.php");

if(isset($_POST['submitq'])) {
$firstname = $_POST['firstname'];

$lastname= $_POST['lastname'];

$email = $_POST['email'];

$m_ID= $_POST['m_ID'];

$question= $_POST['question'];


   $sql = "INSERT INTO help (fName, lName, email, m_ID, question) VALUES('$firstname', '$lastname', '$email', '$m_ID', '$question')";



   if(mysqli_query($conn, $sql)){

      echo "<script>alert('Question reported successfully!'); window.location='help.html';</script>";

    }

    else{

    echo "<script>alert('Error! Try Again')</script>";

    }

  
 $conn->close();
 }


?>


