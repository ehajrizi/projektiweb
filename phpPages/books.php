<?php
include '../phpFiles/header.php';
include_once '../phpFiles/dbConfig.php';
include '../phpFiles/userMapper.php';

$result = new UserMapper();
$result = $result -> getAllBooks();

?>
            
            <div class ="books-main-content">
				<h1>Top Recommendations for Books by Albanian Writers</h1>
				<input type="button" id="see-all" onclick="location.href='#';" value="See All" />
				<div class="scrolling-wrapper">
					<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[0]['foto'];?>"/>
							</div>
							<h3 class="article-title"><a href="<?php echo $result[0]['linku'];?>"><?php echo $result[0]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[0]['autori'];?></div>
						</div>
						
					</div>
					
					<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[1]['foto'];?>">
							</div>
							<br>
							<h3 class="article-title"><a href="<?php echo $result[1]['linku'];?>"><?php echo $result[1]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[1]['autori'];?></div>
						</div>
					</div>

					<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[2]['foto'];?>">
							</div>
							<h3 class="article-title"><a href="<?php echo $result[2]['linku'];?>"><?php echo $result[2]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[2]['autori'];?></div>
						</div>

					</div>
					
					<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[3]['foto'];?>">
							</div>
							<h3 class="article-title"><a href="<?php echo $result[3]['linku'];?>"><?php echo $result[3]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[3]['autori'];?></div>
						</div>
					</div>

					<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[4]['foto'];?>">
							</div>
							<h3 class="article-title"><a href="<?php echo $result[4]['linku'];?>"><?php echo $result[4]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[4]['autori'];?></div>
						</div>

					</div>

					<div class="card">
						<header class="article-header">
							<div class="book-pic">
								<img src="<?php echo $result[5]['foto'];?>">
							</div>
							<h3 class="article-title"><a href="<?php echo $result[5]['linku'];?>"><?php echo $result[5]['titulli'];?></a></h3>
						</header>
						<div class="info">
							<div class="caption">Author</div>
							<div class="name"><?php echo $result[5]['autori'];?></div>
						</div>
					</div>
				</div>
			</div>

            <script src="../jsFiles/main.js"></script>

<?php
include '../phpFiles/footer.php';
?>