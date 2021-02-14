<?php
include '../phpFiles/header.php';
include_once '../phpFiles/dbConfig.php';
include '../phpFiles/userMapper.php';

$result = new UserMapper();
$result = $result -> getAllPlaces();
?>
			
			<div class="places-main-content">
				<h1>Tourist Atractions</h1>
				
					<div class="places">
						<div class="map">
							<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d777233.1596769514!2d20.433676996994624!3d42.59891903316791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2sus!4v1613311328681!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
						</div>
						
						
						<div class="otherPlaces">
							<div class ="place_info"> 
								<div class ="place_img">
									<img src ="<?php echo $result[0]['link'];?>" alt="<?php echo $result[0]['name'];?>">
								</div>
								<h3> <?php echo $result[0]['name'];?> </h3>
								<p><?php echo $result[0]['description'];?></p>
							</div>
							
							<div class ="place_info"> 
								<div class ="place_img">
									<img src ="<?php echo $result[1]['link'];?>" alt="<?php echo $result[1]['name'];?>">
								</div>
								<h3> <?php echo $result[1]['name'];?> </h3>
								<p><?php echo $result[1]['description'];?></p>
							</div>
							
							<div class ="place_info"> 
								<div class ="place_img">
									<img src ="<?php echo $result[2]['link'];?>" alt="<?php echo $result[2]['name'];?>">
								</div>
								<h3> <?php echo $result[2]['name'];?> </h3>
								<p><?php echo $result[2]['description'];?></p>
							</div>
							
							<div class ="place_info"> 
								<div class ="place_img">
									<img src ="<?php echo $result[3]['link'];?>" alt="<?php echo $result[3]['name'];?>">
								</div>
								<h3> <?php echo $result[3]['name'];?> </h3>
								<p><?php echo $result[3]['description'];?></p>
							</div>
						</div>
					</div>
			</div>
			
<?php
include '../phpFiles/footer.php';
?>
 