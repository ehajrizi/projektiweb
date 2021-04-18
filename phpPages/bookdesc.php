<?php session_start(); 
include_once '../phpFiles/dbConfig.php';
include_once '../phpFiles/bookClass.php';
include '../phpFiles/userMapper.php'; 

if(!empty($_GET['title'])){
	$titulli = $_REQUEST['title'];
	$books = new UserMapper();
	$book = $books->getBookByTitle($titulli);
 }

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
            
			<div class="section">
				<div class="image image1">
					<img src="<?php echo $book[0]['foto'];?>"/>
				</div>

				<div class="imgtxt">
					<h2><?php echo $book[0]['titulli'];?></h2>
					<br>
					<div class="bdesc">
					<h3>Book Description</h3>
				    <p><?php echo $book[0]['pershkrimi'];?></p>
					</div>
					<div class="txta">
						<div class="a">
							<h3>Author</h3>
							<p><?php echo $book[0]['autori'];?></p><br>
						</div>

						<div class="a">
							<h3>ISBN Code</h3>
							<p><?php echo $book[0]['isbn'];?></p><br>
						</div>

						<div class="a">
							<h3>Nr. of Pages</h3>
							<p><?php echo $book[0]['pagenr'];?></p>
						</div>
					</div>
				</div>
			</div>


			<?php
				include '../phpFiles/footer.php';
			?>