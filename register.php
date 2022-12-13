<?php
session_start();

	include("config.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$fullName = $_POST['fullname'];
		$user_name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['psw'];
		$contact = $_POST['cNo'];

		if(!empty($fullName) && !empty($user_name) && !empty($email) && !empty($password) && !is_numeric($user_name))
		{
			//save to the database
			$user_ID= random_num(20);
			$query = "insert into member_details (user_ID,user_name,fullName,password,email,contact) values ('$user_ID','$user_name','$fullName','$password','$email','$contact')";

			mysqli_query($conn,$query);
  
			header("Location:payment.php");
			die;
		}else
		{
            echo '<script>alert("Please enter vallid informations!")</script>';
        }


	}
?>

<!DOCTYPE html>

<html>
<head>

    <title>Register |NYC READER'S Public Library</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/register.css">




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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">          <!-- Reference :- w3schools.com -->

        <div class="menu2">
            <a href="myaccount.php"><i class="fa fa-fw fa-user"></i> My Account </a>
            <a href="#"> Membership </a>
            <a href="login.php"> Log in</a>
        </div>

        <center>
            <div class="menu">
                <a href="index.html"><i class="fa fa-fw fa-home"></i> Home </a>
                <a href="categories.html"> Categories </a>
                <a href="help.html"> Help & Support</a>
                <a href="about.html"> About Us</a>
                <a href="vacancies.html"> Vacancies</a>
                <a href="newsandevents.html"> News & Events</a>
                <a href="resc.html"> Resources</a>
                <a href="feedback.html"> Feedback</a>
            </div>

        </center>
    </header>

    <br /><br />



    <!-- Registration form-->
    <form action="register.php" method="post">
        <div class="reg_box" id="reg1">
            <h1>Membership Registration</h1>
            <p>Complete the following membership form</p>
            <hr>
            <label for="name"><b>Full Name</b></label>
            <input type="text" placeholder="Enter your full name" name="fullname" id="fullname" required>

            <label for="username"><b>User Name</b></label>
            <input type="text" placeholder="Enter your username" name="username" id="username" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <!--key element to decide the password visibility -->
            <input type="checkbox" onclick="showPassword()">Show Password<br /><br />      <!-- Reference :- w3schools.com -->

            <label for="psw-repeat"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="psw-confirm" id="psw-confirm" required>

            <label for="contactno"><b>Contact Number</b></label>
            <input type="tel" placeholder="Enter Contact Number" name="cNo" id="cNo" required>

            <hr>

            <div>
                <div class="payment">
                    <button class="meth " id="meth1" disabled>
                        <h3>One Week</h3>
                        <h2>Free Trial</h2>
                    </button>
                    <button class="meth " id="meth1" disabled>
                        <h3>Monthly Plan</h3>
                        <h2>$20.00/ Month</h2>
                    </button>
                    <button class="meth " id="meth1" disabled>
                        <h3>Annual Plan</h3>
                        <h2>$200.00/ Year</h2>
                    </button>
                </div>
            </div>

            <input type="checkbox" id="newsCheck" onclick="newslettersreg()"> <b>I want to receive latest news and announcements.</b><br />

            <p>By signin up you agree to our, <a href="#">Terms of Service</a>.</p>
            <input type="submit" class="registerbtn" name="register_details" value="Register">

            <div class="signin">
                <p>Already have an account? <a href="login.html">Sign in</a>.</p>
            </div>

        </div>


    </form>




    <footer>
        <div class="footer" id="foot1">
            <img class="logo2" src="images/logo.png"> <br><br><br><br><br>
            <form class="submit">
                <input type="text" placeholder="Enter your Email here..">
                <button type="submit">Submit</button>
            </form>
            <div id="fname" align="left" style="color:white"> NEW YORK CITY <br> READER'S </div>
            <div id="fname2" align="left" style="color:white">Public<br>Library </div>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>                <!-- Reference :- w3schools.com -->
            <a href="#" class="fa fa-instagram"></a><br><br><br>
            <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
            <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New York Readers Library All Rights Reserved</h5>
        </div>
    </footer>
    <script src="javas/register.js"></script>
</body>
</html>