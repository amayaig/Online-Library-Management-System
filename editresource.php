<?php


include "config.php";
$bookID=$_GET['editID'];

$sql= "select * from resource_details where bookID=$bookID";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);  /*to display entered data to be updated in particular fields*/     /*-- Reference :- w3schools.com --*/
$category=$row['category'];
$title=$row['title'];
$author=$row['author'];
$publisher=$row['publisher'];


if(isset($_POST['edit'])) {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];

    $sql ="update resource_details set bookID=$bookID, category='$category', title='$title', author='$author', publisher='$publisher' where bookID=$bookID";
	
    $result = mysqli_query($conn, $sql);
    if($result){
		header('location:updateresources.php');
    }
	

}
?>



<!DOCTYPE html>

<html>
<head>

    <title>Edit Resources |NYC READER'S Public Library</title>
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">            <!-- Reference :- w3schools.com -->

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
            <h1>Edit Resource details</h1>
            <hr>
            <label><b>Category</b></label>
            <input type="text" name="category" autocomplete="off" value="<?php echo $category;?>">          <!-- Reference :- w3schools.com -->

            <label><b>Title</b></label>
            <input type="text" name="title" autocomplete="off" value="<?php echo $title;?>">

            <label><b>Author</b></label>
            <input type="text" name="author" autocomplete="off" value="<?php echo $author;?>" >

            <label><b>Publisher</b></label>
            <input type="tel" name="publisher" autocomplete="off" value="<?php echo $publisher;?>">

            <hr>

            <input type="submit" class="savebtn" name="edit" value="Edit">
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
            <a href="#" class="fa fa-twitter"></a>                       <!-- Reference :- w3schools.com -->
            <a href="#" class="fa fa-instagram"></a><br><br><br>
            <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
            <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New York Readers Library All Rights Reserved</h5>
        </div>
    </footer>
    <script src="javas/register.js"></script>
</body>
</html>