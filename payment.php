
<?php
session_start();

	include("config.php");
	include("functions.php");

     
    if(isset($_POST['btnnnn'])){
        $member_name = $_POST['member_name'];
        $member_plan = $_POST['member_plan'];
        $cardnumber = $_POST['cardnumber'];
        $cardholder = $_POST['cardholder'];
       
        $sql = "INSERT INTO payment ( member_name, member_plan , card_number, card_holder) VALUES ('$member_name','$member_plan','$cardnumber', '$cardholder')";

        if ($conn->query($sql) === TRUE) {

		    echo "<script> alert('Payment is Successful!'); alert('You have registered successfully!');</script>";
            header("Location: login.php");
            die;
        
        } else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      
     $conn->close();
     
    

    }



?>








<!DOCTYPE html>

<html>
<head>

    <title>Payment|NYC READER'S Public Library</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/payment.css">




</head>

<body>
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="bar" id="rec1">
            <img class="logo" src="images/logo.png" width="200" height="205" align="left">
            <h3 id="name" align="left" style="color:white"> NEW YORK CITY <br> READER'S</h3>
            <form class="search1">
                <input type="text" placeholder="Search for content..">
                <button type="submit">GO</button>
            </form>
            <div id="name2" align="left" style="color:white">Public<br>Library</div>

        </div>

        <!-- Load an icon library -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     <!-- Reference :- w3schools.com -->

        <div class="menu2">
            <a href="myaccount.php"><i class="fa fa-fw fa-user"></i> My Account </a>
            <a href="register.php"> Membership </a>
            <a href="login.php"> Log in</a>
        </div>

        <center>
            <div class="menu">
                <a href="index.html"><i class="fa fa-fw fa-home"></i> Home </a>
                <a href="categories.html"> Categories </a>
                <a href="help&support.html"> Help & Support</a>
                <a href="about.html"> About Us</a>
                <a href="vacancies.html"> Vacancies</a>
                <a href="newsandevents.html"> News & Events</a>
                <a href="resc.html"> Resources</a>
                <a href="feedback.html"> Feedback</a>
            </div>

        </center>
    </header>

    <br /><br />


    <!---payment-------->

        <div class="paycolo">  <!-- Reference :- w3schools.com -->
            <div class="inpaybox">
                <form action="payment.php" method="POST">
                        <div class="inpaybox2">
                            <center><h3>Payment Details</h3></center>
                            <label for="fname">Payment methods</label>
                            <div class="paymeth4">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="member_name">Member name</label>
                            <input type="text" id="member_name" name="member_name" placeholder="Tyson Mc cent">
                            <label for="member_plan">Membership plan</label>
                            <input type="text" id="member_plan" name="member_plan" placeholder="Choose the membership - Monthly, Annual">
                            <label for="cardnumber">Card number</label>
                            <input type="text" id="cardnumber" name="cardnumber" placeholder="0000-1111-2222-3333">
                            <label for="cardholder">Card holder</label>
                            <input type="text" id="cardholder" name="cardholder" placeholder="Roy Jones Jr">
                            <label for="expiremonth">Exp Month</label>
                            <input type="text" id="expiremonth" name="expiremonth" placeholder="July">
                            <label for="expireyear">Exp Year</label>
                            <input type="text" id="expireyear" name="expireyear" placeholder="2010">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="787">
                        </div>
                    <input type="submit" value="Confirm Payment" class="btn7" name="btnnnn" id="btnnnn">
                </form>
            </div>
        </div>
    
















    <footer>
        <div class="footer" id="foot1">
            <img class="logo2" src="images/logo.png"> <br><br><br><br><br>
            <form class="submit">
                <input type="text" placeholder="Enter your Email here..">
                <button type="submit">Submit</button>
            </form>
            <div id="fname" align="left" style="color:white"> NEW YORK CITY <br> READER'S </div>
            <div id="fname2" align="left" style="color:white">Public<br>Library </div>
            <a href="#" class="fa fa-facebook"></a>                   <!-- Reference :- w3schools.com -->
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a><br><br><br>
            <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
            <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New York Readers Library All Rights Reserved</h5>
        </div>
    </footer>
</body>
</html>