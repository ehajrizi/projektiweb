<?php
include_once 'header.php';
include_once 'userMapper.php';
?>
<div class="contactUs-container">
        <h1>Add Artist</h1>
            <div class="column">
            <form name="formCU" id=" formCU" method="post" action="../phpFiles/mu_dataVerify.php" enctype="multipart/form-data">
                <label for="name">Artist Name</label><br>
                <input type="text" id="name" name="name" placeholder="Name.."><br>

                <label for="description">Description</label><br>
                <textarea id="description" name="description" placeholder="Description.." style="height:90px"></textarea><br>
                
                <input type="hidden" name="size" value="1000000">
                <label for="foto">Artist Photo</label><br>
                <input type="file" id="foto" name="foto"><br>

                <label for="link">PLaylist Link</label><br>
                <input type="url" id="link" name="link" placeholder="Link.."><br>
                
			    <input type="submit" id="submit_mu_bobtn" name="submit_mu_bobtn" value="Upload Artist">
            </form>
        </div>
</div>
<script src="../jsFiles/music.js"></script>

<?php include 'footer.php'; ?>

