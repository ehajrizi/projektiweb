<?php
include '../phpFiles/header.php';
include_once '../phpFiles/dbConfig.php';
include '../phpFiles/userMapper.php';

$result = new UserMapper();
$result = $result -> getAllArtists();


?>
<div class="music_main_content">
    <h1> Artists </h1>
        
   <div class= "music_artists" >

   <?php 
                $result = array_chunk($result,1);

                foreach ($result as $result) {
                   echo "<div class ='artist_info'>";
                    foreach ($result as $item) {  ?>   


                        <div class ="artist_img">
                             <img src ="<?php echo $item['foto'];?>"onclick="location.href='<?php echo $item['link'];?>'"alt="<?php echo $item['name'];?>">
                        </div>
                        <h3><a class="music_link"href="<?php echo $item['link'];?>"><?php echo $item['name'];?></a></h3>
                        
                        <p class="role"><?php echo $item['description'];?></p>  
                        <?php





					
                    }  
                    echo "</div>";
                   
                }
               ?>
     
         
   </div>
   

   <?php if(isset($_SESSION["role"]) && $_SESSION["role"]==1):?>
			   <br>
			   <button id="music_button"><a class="linkbtn" href="../phpFiles/addMusic.php?>">Add Artist</a></button>
			   <?php endif;?>

</div>



 










<?php
include '../phpFiles/footer.php';
?>