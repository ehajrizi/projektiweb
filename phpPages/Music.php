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
        <div class ="artist_info"> 
            <div class ="artist_img">
                <img src ="<?php echo $result[0]['foto'];?>" alt="<?php echo $result[0]['name'];?>">
            </div>
            <h3> <?php echo $result[0]['name'];?> </h3>
            <p class="role"><?php echo $result[0]['description'];?></p>

        </div>

        <div class ="artist_info"> 
            <div class ="artist_img">
                <img src ="<?php echo $result[1]['foto'];?>" alt="<?php echo $result[1]['name'];?>">
            </div>
            <h3> <?php echo $result[1]['name'];?> </h3>
            <p class="role"><?php echo $result[1]['description'];?></p>

        </div>

        <div class ="artist_info"> 
            <div class ="artist_img">
                <img src ="<?php echo $result[2]['foto'];?>" alt="<?php echo $result[2]['name'];?>">
            </div>
            <h3> <?php echo $result[2]['name'];?> </h3>
            <p class="role"><?php echo $result[2]['description'];?></p>

        </div>

        

        <div class ="artist_info"> 
            <div class ="artist_img">
                <img src ="<?php echo $result[3]['foto'];?>" alt="<?php echo $result[3]['name'];?>">
            </div>
            <h3> <?php echo $result[3]['name'];?> </h3>
            <p class="role"><?php echo $result[3]['description'];?></p>

        </div>
        

        <div class ="artist_info"> 
            <div class ="artist_img">
                <img src ="<?php echo $result[4]['foto'];?>" alt="<?php echo $result[4]['name'];?>">
            </div>
            <h3> <?php echo $result[4]['name'];?> </h3>
            <p class="role"><?php echo $result[4]['description'];?></p>

        </div>    
        
        <div class ="artist_info"> 
            <div class ="artist_img">
                <img src ="<?php echo $result[5]['foto'];?>" alt="<?php echo $result[5]['name'];?>">
            </div>
            <h3> <?php echo $result[5]['name'];?> </h3>
            <p class="role"><?php echo $result[5]['description'];?></p>

        </div>    
   </div>
   

</div>
 
   









<?php
include '../phpFiles/footer.php';
?>