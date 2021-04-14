<?php session_start(); ?>
<!DOCTYPE html>
<html>
  
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find your roots</title>
        <link rel="stylesheet" href="../css/style2.css">
    </head>
    <body>
      <div class="background">  
        <div class="home-header">
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

          <div class="home-dropdown">
            <button class="home-dropbtn">Discover
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="home-dropdown-content">
            <a href="books.php">Books</a>
            <a href="Music.php">Music</a>
            <a href="Places.php">Places</a>
            </div>
          </div>

          <a href="aboutUs.php">About Us</a>
          <a href="home.php">Home</a>
        </div>
        
        <div class="home-main-content">
          <h2>Find</h2>
          <p>your roots</p>

        </div>
      
        <script src="../jsFiles/main.js"></script>
<?php
include '../phpFiles/footer.php';
?>