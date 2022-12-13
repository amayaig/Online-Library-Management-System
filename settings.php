<?php 

session_start();
include "config.php";

    if(isset($_SESSION['user_ID'])) 
        $user_ID = $_SESSION['user_ID'];

	
        $sql = "SELECT * FROM member_details WHERE user_ID='$user_ID'";
        $result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_assoc($result);   //-- Reference :- w3schools.com 
		
        $user_name = $row['user_name'];
        $fullName = $row['fullName'];
        $password = $row['password'];
        $email = $row['email'];
        $contact = $row['contact'];
	  
    

    if(isset($_POST['edit'])) {
        $user_name = $_POST['user_name'];
        $fullName = $_POST['fullName'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

             $sql ="update member_details set user_name='$user_name', fullName='$fullName', password='$password', email='$email', contact='$contact', fullName='$fullName' where user_ID='$user_ID'";
	
             $result = mysqli_query($conn, $sql);
             if($result){
		        header('location:myaccount.php');
             }
	

    }

?>

<!DOCTYPE html>

<html>
<head>

    <title>Profile settings |NYC READER'S Public Library</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/settings.css">

    


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
            <a href="register.php"> Membership </a>
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



    
    <form action="settings.php" method="post">
        <div class="box" id="reg1">
            <h1><i class="fa fa-fw fa-cog"></i>Profile settings</h1>
            <hr>
            <label><b>Full Name</b></label>
            <input type="text" name="fullName" id="fullName" autocomplete="off" value=<?php echo $fullName;?>>     <!-- Reference :- w3schools.com -->

            <label><b>Email</b></label>
            <input type="text" name="email" id="email" autocomplete="off" value=<?php echo $email;?>>
			
			<label><b>User Name</b></label>
            <input type="text" name="user_name" id="user_name" autocomplete="off" value=<?php echo $user_name;?>>

            <label><b>Contact Number</b></label>
            <input type="tel" name="contact" id="contact" autocomplete="off" value=<?php echo $contact;?>>

            <label><b>Password</b></label>
            <input type="password" name="password" id="password" autocomplete="off" value=<?php echo $password;?>>

            <!--key element to decide the password visibility -->
            <input type="checkbox" onclick="showPassword()">Show Password<br /><br />       <!-- Reference :- w3schools.com -->

            <label><b>Re-enter Password</b></label>
            <input type="password" name="psw-confirm" id="psw-confirm" autocomplete="off">

            <hr>

            <input type="submit" class="savebtn" id="edit" name="edit" value="Save changes">

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
            <a href="#" class="fa fa-facebook"></a>            <!-- Reference :- w3schools.com -->
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a><br><br><br>
            <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
            <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New York Readers Library All Rights Reserved</h5>
        </div>
    </footer>
    <script src="javas/settings.js"></script>
</body>
</html>




