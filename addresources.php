<?php


include "config.php";
if(isset($_POST['save'])) {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];

    $sql = "insert into resource_details (bookID, category, title, author, publisher)
    values('', '$category', '$title', '$author', '$publisher')";
	
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location:updateresources.php');
    }
	

}
?>



<!DOCTYPE html>

<html>
<head>

    <title>Add Resources |NYC READER'S Public Library</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/addresources.css">




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


    <form method="post">
        <div class="box" id="reg1">
            <h1>New Resource</h1>
            <hr>
            <label for="category"><b>Category</b></label>
            <input type="text" name="category" placeholder="Novel / Short story / Educational / Documentary / Journal / Other" autocomplete="off" required>    <!-- Reference :- w3schools.com -->

            <label for="title"><b>Title</b></label>
            <input type="text" name="title" placeholder="Enter resource title" autocomplete="off" required>

            <label for="author"><b>Author</b></label>
            <input type="text" name="author" placeholder="Enter resource author(s)" autocomplete="off" required>

            <label for="publisher"><b>Publisher</b></label>
            <input type="tel" name="publisher" placeholder="Enter resource publisher" autocomplete="off" required />

            <hr>

            <input type="submit" class="savebtn" name="save" value="Save">
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
            <a href="#" class="fa fa-facebook"></a>   <!-- Reference :- w3schools.com -->
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a><br><br><br>
            <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
            <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New York Readers Library All Rights Reserved</h5>
        </div>
    </footer>
    <script src="javas/register.js"></script>
</body>
</html>