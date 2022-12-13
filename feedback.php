<?php 
  session_start();
  include("config.php");

 
    if(isset($_POST['submitf'])){
        $flname = $_POST['flname'];
        $country = $_POST['country'];
        $subject7 = $_POST['subject7'];

        $sql = "INSERT INTO feedback ( full_name, country, feedback_text) VALUES ('$flname', ' $country', '$subject7')";

        if ($conn->query($sql) === TRUE) {

        echo "<script> alert('Feedback is submitted successfully!'); window.location='feedback.html' </script>";

        }else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

     

     $conn->close();

    

    }

?>