<?php session_start();  ?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find your roots</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
	
    <body>   
        <div class ="all-backgound2">
            <div class="header">
				<?php
					if(isset($_SESSION["role"])):
				?>
					<a href="../phpFiles/logout.php">Log Out</a>
				<?php
					endif;
				?>
		  
				<?php
					if(isset($_SESSION["role"]) && $_SESSION["role"] == 1):
				?>
					<a href="../phpFiles/dashboard.php">Dashboard</a>
				<?php else:?>
					<a href="getInvolved.php">Get involved</a>
				<?php endif; ?>

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
                <div class="aboutUs-container">
                    <div class="aboutUs-inner-container">
                        <h1>About Us</h1>
						<div class="au_text">
                        <p class="text">
                            We seek to bring people closer to their roots, inform those who want to learn more.
                            We seek to bring people closer to their roots, inform those who want to learn more.
                            We seek to bring people closer to their roots, inform those who want to learn more.
                            We seek to bring people closer to their roots, inform those who want to learn more.
                        </p>
						</div>
                    </div>
                </div>

                <div class="contactUs-container">
                    <h1>Contact Us</h1>
                     <div class="column">
                        <form name="formCU" id=" formCU" action="../phpFiles/cu_dataVerify.php" method="post">
                            <label for="fname">First Name</label><br>
                            <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>
                            <label for="lname">Last Name</label><br>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
                            <label for="subject">Comments</label><br>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:90px"></textarea><br>
                            <button id="submitbtn" name="submitbtn"> Submit </button>
                        </form>
                    </div>
                </div>
        
            <script src="../jsFiles/script.js"></script>
			
<?php
include '../phpFiles/footer.php';
?>
