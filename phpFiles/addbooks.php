<?php
include_once 'header.php';
include_once 'bookClass.php';
include_once 'userMapper.php';

?>
<div class="contactUs-container">
        <h1>Add Book</h1>
            <div class="column">
            <form name="formCU" id=" formCU" method="post" action="../phpFiles/bo_dataVerify.php" enctype="multipart/form-data">
                <label for="titulli">Title</label><br>
                <input type="text" id="titulli" name="titulli" placeholder="Title.."><br>
                <input type="hidden" name="size" value="1000000">
                <label for="foto">Book Cover</label><br>
                <input type="file" id="foto" name="foto"><br>
                <label for="autori">Author</label><br>
                <input type="text" id="autori" name="autori" placeholder="Author.."><br>
                <label for="pershkrimi">Description</label><br>
                <textarea id="pershkrimi" name="pershkrimi" placeholder="Description.." style="height:90px"></textarea><br>
                <label for="isbn">ISBN</label><br>
                <input type="text" id="isbn" name="isbn" placeholder="ISBN.."><br>
                <label for="pagenr">Page Number</label><br>
                <input type="text" id="pagenr" name="pagenr" placeholder="Page Number.."><br>
			    <input type="submit" name="submitbobtn" value="Upload Book">
            </form>
        </div>
</div>

<?php include 'footer.php'; ?>


