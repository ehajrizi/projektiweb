<?php
include_once 'header.php';
include_once 'userMapper.php';
?>
<div class="contactUs-container">
        <h1>Add Place</h1>
            <div class="column">
            <form name="formCU" id=" formCU" method="post" action="../phpFiles/pl_dataVerify.php" >
                <label for="name">Place Name</label><br>
                <input type="text" id="name" name="name" placeholder="Name.."><br>

                <label for="description">Description</label><br>
                <textarea id="description" name="description" placeholder="Description.." style="height:90px"></textarea><br>
        
                <label for="link">Place Photo Link</label><br>
                <input type="url" id="link" name="link"><br>
                
			    <input type="submit" id="submit_pl_btn" name="submit_pl_btn" value="Upload Place">
            </form>
        </div>
</div>
<script src="../jsFiles/places.js"></script>

<?php include 'footer.php'; ?>

