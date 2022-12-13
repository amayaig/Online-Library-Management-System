<?php

include "config.php";

?>

<!DOCTYPE html>

<html>
<head>

    <title>Update resources|NYC READER'S Public Library</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/updateresources.css">

</head>

<body>
    <header>
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      <!-- Reference :- w3schools.com -->

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
     </center><br>

    </header>

    <div class="main">
        <table>
            <tr>
				<td><button style="background-color:blue;" class="btn" name="add"><a href="addresources.php" class="anchor"> Add resources </a></button></td>
            </tr>

            <tr>
                <th>CATEGORY</th>
                <th>BOOK ID</th>
                <th>TITLE</th>
                <th>AUTHOR(S)</th>
                <th>PUBLISHER</th>
                <th></th>
                <th></th>
            </tr>

<?php   //-- Reference :- youtube.com 

$sql = "select * from resource_details";    
$result = mysqli_query($conn, $sql);

if($result) {
	while($row = mysqli_fetch_assoc($result)){
		$category = $row['category'];
		$bookID = $row['bookID'];
		$title = $row['title'];
		$author = $row['author'];
		$publisher = $row['publisher'];
		
		echo '<tr>
                <td>'.$category.'</td>
                <td>'.$bookID.'</td>
                <td>'.$title.'</td>
                <td>'.$author.'</td>
                <td>'.$publisher.'</td>
                <td><button class="btn" name="edit" style="background-color:green;"> <a href="editresource.php?editID='.$bookID.'" class="anchor"> Edit </a> </button></td>
                <td><button class="btn" name="delete" style="background-color:red;"> <a href="deleteresource.php?deleteID='.$bookID.'" class="anchor"> Delete </a> </button></td>
            </tr>';
	}
}
?>

        </table>
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
            <a href="#" class="fa fa-facebook"></a>       <!-- Reference :- w3schools.com -->
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a><br><br><br>
            <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
            <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New York Readers Library All Rights Reserved</h5>
        </div>
    </footer>
    <script src="javas/categories.js"></script>
</body>
</html>