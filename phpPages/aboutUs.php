<?php
include '../phpFiles/header.php';
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
