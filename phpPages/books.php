<?php
session_start();
include_once '../phpFiles/dbConfig.php';
include '../phpFiles/userMapper.php';

$result = new UserMapper();
/*$result2 = new UserMapper();*/
$result = $result -> getAllBooks();
/*$result2 = $result2 -> getAllComments();*/


if(isset($_POST['upload'])){
	$target = "images/".basename($_FILES['image']['name']);
	$db = mysqli_connect("localhost","root","","projektiweb-1");
	$image = $_FILES['image']['name'];
	$text = $_POST['text'];

	if(!empty($image) || !empty($text)){
	$sql = "Insert into images (image,text) values ('$image','$text')";
	mysqli_query($db,$sql);
	}

	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		$msg = "Image uploaded successfully!";
	}else{
		$msg = "Image failed to upload!";
	}
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
            
            <div class ="books-main-content">
				<h1>Top Recommendations for Books by Albanian Writers</h1>
				<div class="scrolling-wrapper">

			<div class="blist">
				<ul class='list-inline'>
					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[0]['foto'];?>" onclick="location.href ='bookdesc.php';"

	/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[0]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[0]['autori'];?></div>
						</div>
						
					</div>
					  </li>

					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[0]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[0]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[0]['autori'];?></div>
						</div>
						
					</div>
					  </li>

					  <li>
						<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[1]['foto'];?>" onclick="location.href ='bookdesc.php';" />
							</div>
							<br>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[1]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[1]['autori'];?></div>
						</div>
					</div>
					  </li>

					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>
  
						<li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[3]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[3]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[3]['autori'];?></div>
						</div>

					</div>
					  </li>

					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[4]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[4]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[4]['autori'];?></div>
						</div>

					</div>
					  </li>

					  
					 <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[5]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[5]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[5]['autori'];?></div>
						</div>

					</div>
					  </li>

					  
					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>

					  
					 <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>

					  
					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>

					  
					  <span id="dots"></span><span id="more">
					  

					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>

					   <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>

					  <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>


					    <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					  </li>

					 <li>
							<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[5]['foto'];?>" onclick="location.href ='bookdesc.php';"/>
							</div>
							<h3 class="article-title"><a href="bookdesc.php"><?php echo $result[5]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[5]['autori'];?></div>
						</div>

					</div>
					  </li>
				  
			</ul>
			<p>dfghjkdgfhjkljhgfhjkl;jhgjkl;</p>
			
			</div>

			</div>
						<button onclick="myFunction()" id="myBtn">See more</button>

			<h3>Comments:</h3>
				
			<div id="comments">

			<?php 
			   
				$db = mysqli_connect("localhost","root","","projektiweb-1");
				$sql = "Select * from images";
				$result2 = mysqli_query($db,$sql);
				while($row = mysqli_fetch_array($result2)){
					echo "<div id='img_div'>"; 
					if(!empty($row['image'])){
						echo "<img src='images/".$row['image']."'>";}
						echo "<p>".$row['text']."</p>";
					echo "</div>";
					echo"<hr>";
					
				}
			?>

			<?php
					if(!isset($_SESSION["role"])):
			?>
				<a id="loga" href="getInvolved.php">If you'd like to add a comment, please sign up/log in!</a>
			<?php
					endif;
			?>



			<?php
					if(isset($_SESSION["role"])):
			?>
					
				
				<form id="bform" method="post"  action="books.php" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">
					<div class="divinp">
						<input type="file" name="image">
					</div>
					<div class="divinp">
						<textarea name="text" cols="40" rows="4" placeholder="Add a Comment..."></textarea>
					</div>
					<div class="divinp">
						<input type="submit" name="upload" value="Upload Image">
					</div>
				</form>
				<?php
					endif;
				?>
			</div>

			<script src="../jsFiles/book.js"></script>
			<script>
				if ( window.history.replaceState ) {
				  window.history.replaceState( null, null, window.location.href );
				}
			</script>
<?php
include '../phpFiles/footer.php';
?>