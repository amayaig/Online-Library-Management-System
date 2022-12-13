<?php
    session_start();

	include("config.php");
	include("functions.php");


	$user_data = check_login($conn);

    if(isset($_SESSION['user_ID'])){                            //-- Reference :- w3schools.com 
        $user_ID = $_SESSION['user_ID'];

        $query = mysqli_query($conn,"SELECT * FROM member_details WHERE user_ID='$user_ID'");
        $row = mysqli_fetch_array($query);
    
        $id = $row['id'];
        $user_ID = $row['user_ID'];
        $user_name = $row['user_name'];
        $fullName = $row['fullName'];
        $password = $row['password'];
        $email = $row['email'];
        $contact = $row['contact'];
        $date = $row['date'];


}else{
    header("Location: login.php");
}
  
?>







                                                                                      

<!DOCTYPE html>

<html>
<head>

    <title>My Account|NYC READER'S Public Library</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/myaccount.css">


</head>

<body>
    <header>
        <div class="bar" id="rec1">
            <img class="logo" src="images/logo.png" width="200" height="205" align="left">
            <h3 id="name" align="left" style="color:white"> NEW YORKS CITY <br> READER'S</h3>
            <form class="search1">
                <input type="text" placeholder="Search for content..">
                <button type="submit">GO</button>
            </form>
            <div id="name2" align="left" style="color:white">Public<br>Library</div>

        </div>

        <!-- Load an icon library -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">           <!-- Reference :- w3schools.com -->

        <div class="menu2">
            <a href="#" id="active"><i class="fa fa-fw fa-user"></i> My Account </a>
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


    <center>
        <form action="myaccount.php">
            <div class="main">
                <div class="sidebar">
                    <div class="info_list">
                        <h1> MY PROFILE </h1><h2> personal information </h2>
                        <div class="profile_pic">
                            <img src="images/propic.jpg" width="200" height="205">
                        </div>

                        <ul class="info_list">     <!-- Reference :- w3schools.com -->
                            <li class="info">
                                <div><i class="fa fa-fw fa-user"></i> Full name : <?php echo $fullName;?> </div>
                            </li>
                            <li class="info">
                                <div><i class="fa fa-fw fa-envelope"></i> Email : <?php echo $email;?> </div>
                            </li>
                            <li class="info">
                                <div><i class="fa fa-fw fa-book"></i> User ID : <?php echo $user_ID;?> </div>
                            </li>
                            <li class="info">
                                <div><i class="fa fa-fw fa-book"></i> User name : <?php echo $user_name;?> </div>
                            </li>
                            <li class="info">
                                <div><i class="fa fa-fw fa-phone"></i> Mobile : <?php echo $contact;?> </div>
                            </li>

                        </ul>
                    </div>

                    <div class="list">
                        <div class="setbtn">
                            <span><i class="fa fa-fw fa-cog"></i><a style="color:white;" href="settings.php"> Profile settings</a></span>
                        </div>
                        <div class="setbtn">
                            <span><i class="fa fa-fw fa-list"></i>Activity log</span>
                        </div>
                        <div class="setbtn">
                            <span><i class="fa fa-fw fa-arrow-right"></i><a style="color:white;" href="logout.php" >Log out</a></span>
                        </div>

                    </div>

                </div>

                <div class="mainbar">
                    <div class="section">
                        <h1>Saved Books</h1>
                        <table>
                            <tr>
                                <th>Book ID</th>
                                <th>Book Name</th>
                                <th>Progress</th>
                            </tr>
                            <tr>
                                <td>NV1307</td>
                                <td>While it lasts by Abbi Glines</td>
                                <td>
                                    <div id="bar">
                                        <div id="progress1">100%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>DC1705</td>
                                <td>The Crusades by Thomas Asbridge</td>
                                <td>
                                    <div id="bar">
                                        <div id="progress2">70%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>NV1102</td>
                                <td>Les miserable by Victor Hugo</td>
                                <td>
                                    <div id="bar">
                                        <div id="progress3">45%</div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <br /><br />
                        <div>
                            <div class="book">
                                <img src="images/book1.jpg" width="230" height="260">
                                <br /><br />
                                <button class="read">Continue reading...</button>
                            </div>
                            <div class="book">
                                <img src="images/book2.jpg " width="230" height="260">
                                <br /><br />
                                <button class="read">Continue reading...</button>
                            </div>
                            <div class="book">
                                <img src="images/book3.jpg " width="230" height="260">
                                <br /><br />
                                <button class="read">Continue reading...</button>
                            </div>
                        </div>

                    </div>



                    <div class="section">
                        <h2>History</h2>
                        <table>
                            <tr>
                                <th>Date</th>
                                <th>Book ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                            <tr>
                                <td>20-08-2021</td>
                                <td>NV1236</td>
                                <td>The Lost City</td>
                                <td>Trevor McField</td>
                            </tr>
                            <tr>
                                <td>20-08-2021</td>
                                <td>NV1307</td>
                                <td>While it Lasts</td>
                                <td>Abbi Glines</td>
                            </tr>
                            <tr>
                                <td>18-08-2021</td>
                                <td>DC2112</td>
                                <td>A World Beyond Physics</td>
                                <td>Stuart Kauffman</td>
                            </tr>
                            <tr>
                                <td>15-08-2021</td>
                                <td>ED7711</td>
                                <td>Effective JAVA</td>
                                <td>Joshua Bloch</td>
                            </tr>
                            <tr>
                                <td>15-08-2021</td>
                                <td>ED4569</td>
                                <td>Head First Java</td>
                                <td>Bert Bates</td>
                            </tr>
                            <tr>
                                <td>02-07-2021</td>
                                <td>NV1869</td>
                                <td>Jane Eyre</td>
                                <td>Charlotte Bronte</td>
                            </tr>
                            <tr>
                                <td class="more">Show more...</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </form>
    </center>


    <footer>
        <div class="footer" id="foot1">
            <img class="logo2" src="images/logo.png"> <br><br><br><br><br>
            <form class="submit">
                <input type="text" placeholder="Enter your Email here..">
                <button type="submit">Submit</button>
            </form>
            <div id="fname" align="left" style="color:white"> NEW YORKS CITY <br> READER'S </div>
            <div id="fname2" align="left" style="color:white">Public<br>Library </div>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>                     <!-- Reference :- w3schools.com -->
            <a href="#" class="fa fa-instagram"></a><br><br><br>
            <h5 align="right" href="#" style="color:white"><u>Terms of use</u> &#160 <u>Privacy and policy</u></h5>
            <h5 id="copyright" align="left" style="color:white"><i class="fa fa-fw fa-copyright"></i>2021 New Yorks Readers Library All Rights Reserved</h5>
        </div>
    </footer>

</body>
</html>