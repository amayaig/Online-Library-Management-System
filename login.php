<?php
session_start();

	include("config.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")          //References:-youtube.com
	{
		//something was posted
		$user_name = $_POST['uname'];
		$password = $_POST['psw'];


		if(!empty($user_name)  && !empty($password) && !is_numeric($user_name))
		{
			//read values from the  database
			$query = "select * from member_details where user_name='$user_name' limit 1";

			$result= mysqli_query($conn,$query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] == $password)
					{
						$_SESSION['user_ID'] = $user_data['user_ID'];
						header("Location:myaccount.php");
						die;
					}else
					{
						header("Location:login.php");
						die;
					}
				}
			}
			 echo '<script>alert("Wrong credentials have been entered")</script>';
		}else

		{
			 echo '<script>alert("Wrong credentials have been entered")</script>';

        }


	}

?>

<!DOCTYPE html>

<html>
<head>

    <title>Login|NYC READER'S Public Library</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">


</head>

<body>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">         <!-- Reference :- w3schools.com -->

    <div class="menu2">
        <a href="myaccount.php"><i class="fa fa-fw fa-user"></i> My Account </a>
        <a href="register.php"> Membership </a>
        <a href="#"> Log in</a>
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
    <br /><br />

    <center>
        <form action="login.php" method="post">


            <div class="container">
                <img src="images/pro.png" alt="Avatar" class="avatar"><br>
                <label style="float:left;" for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label style="float:left;" for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button><br>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label><br><br>
                <button style="margin:5px; float:left; background-color:red;" type="button" class="cancelbtn">Cancel</button>          <!-- Reference :- w3schools.com -->
                <span class="psw">Forgot <a href="#">password?</a></span><br><br><br>
            </div>


        </form>
    </center>

    <div class="footer" id="foot1">
        <img class="logo2" src="images/logo.png"> <br><br><br><br><br>
        <form class="submit">
            <input type="text" placeholder="Enter your Email here..">
            <button type="submit">Submit</button>
        </form>
        <div id="fname" align="left" style="color:white"> NEW YORK CITY <br> READER'S </div>
        <div id="fname2" align="left" style="color:white">Public<br>Library </div>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>                  <!-- Reference :- w3schools.com -->
        <a href="#" class="fa fa-instagram"></a><br><br><br>
        <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
        <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New York Readers Library All Rights Reserved</h5>
    </div>

</body>
</html>