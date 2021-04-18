<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find your roots</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
	
    <body>
     
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
