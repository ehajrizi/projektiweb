<?php  
include '../phpFiles/header.php';
include_once '../phpFiles/dbConfig.php';
include_once '../phpFiles/bookClass.php';
include '../phpFiles/userMapper.php'; 

if(!empty($_GET['title'])){
	$titulli = $_REQUEST['title'];
	$books = new UserMapper();
	$book = $books->getBookByTitle($titulli);
 }

?>
            
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