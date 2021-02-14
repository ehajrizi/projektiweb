<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find your roots</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
	
    <body class="about">   
        <div class ="all-backgound">
            <div class="header">
                <a href="../phpPages/getInvolved.php">Get involved</a>

                <div class="dropdown">
                <button class="dropbtn">Discover
                    <i class="fa fa-caret-down"></i>
                </button>
					<div class="dropdown-content">
						<a href="../phpPages/books.php">Books</a>
						<a href="Music.php">Music</a>
						<a href="../phpPages/Places.php">Places</a>
					</div>
                </div>

                <a href="../phpPages/aboutUs.php">About Us</a>
                <a href="../phpPages/home.php">Home</a>
                
            </div>	
            <div class="aboutUs-main-content">
                <div class="display"> 
                <div class="aboutUs-container">
                    <div class="aboutUs-inner-container">
                        <h1>About Us</h1>
                        <p class="text">
                            Lorem Ipsum is simply dummy text 
                        </p>
                    </div>
                </div>

                <div class="contactUs-container">
                    <h1>Contact Us</h1>
                     <div class="column">
                        <form name="formCU" id=" formCU" action="../phpFiles/cu_dataVerify.php" method="post">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                            <button id="submitbtn" name="submitbtn"> Submit </button>
                        </form>
                    </div>
                  

                </div>
				</div>
            </div>

            <script src="../jsFiles/script.js"></script>

<?php
include '../phpFiles/footer.php';
?>
