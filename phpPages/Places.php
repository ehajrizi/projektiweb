<?php
include '../phpFiles/header.php';
include_once '../phpFiles/dbConfig.php';
include '../phpFiles/userMapper.php';

$result = new UserMapper();
$result = $result -> getAllPlaces();
$activitiesMap = new UserMapper();
$activites = $activitiesMap->getAllActivities();
?>
			
	<div class="places-main-content">
		<h1>Tourist Attractions</h1>
				
			<div class="places-left">
				<div class="map">
					<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d777233.1596769514!2d20.433676996994624!3d42.59891903316791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2sus!4v1613311328681!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
				</div>
							
			</div>				
			<div class="places-right">
				<div class="places-slider">


					<?php 
						$result = array_chunk($result,1);

						foreach ($result as $result) {
						echo " <div class='places-slider-item'>";
						foreach ($result as $item) {  ?>   


									  
						<img src ="<?php echo $item['link'];?>" alt="<?php echo $item['name'];?>">	

						<div class="places-slider-item-text">
							<h1><?php echo $item['name'];?></h1>
												
							<p><?php echo $item['description'];?></p> 

						</div>

					<?php
						}  
						echo "</div>";
										
						}
					?>


			    </div>
		
		    </div>

			<h3>Activities in Kosovo</h3>

			<div class="main_activity">	
			<div class="row_activity">
					<?php 
						$activitiesMap = array_chunk($activites,1);

						foreach ($activitiesMap as $activites) {
						echo "<div class='box_activity'>";
						foreach ($activites as $item) {  ?>   

						<div class="activity_content">
						<img src ="<?php echo $item['act_img'];?>" alt="<?php echo $item['name_act'];?>">
							<h3><?php echo $item['name_act'];?></h3>
												
							<p><?php echo $item['description_act'];?></p> 

						</div>


					<?php
						}  
						echo "</div>";
			
						}
					?>
			</div>
			</div>

			
	
		<?php if(isset($_SESSION["role"]) && $_SESSION["role"]==1):?>
		<br>
		<button id="places_button"><a class="linkbtn" href="../phpFiles/addPlaces.php?>">Add Place</a></button>
		<?php endif;?>

					   
	</div>				
	</div>
			
<?php
include '../phpFiles/footer.php';
?>
 