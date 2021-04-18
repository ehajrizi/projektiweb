<?php
include_once 'header.php';
include_once 'userMapper.php';

if (isset($_GET['id'])) {
    $artistid = $_GET['id'];
    $mapper = new UserMapper();
    $music = $mapper->getArtistByID($artistid);
}
?>

<h1>Edit</h1>
				
			<div id="comments">

                <form id="bform" method="get"  action="editMusicUpdate.php" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">
                    <input type="text" name="id" style="display:none;" value=<?php echo $artistid; ?>. />
                    <div class="divinp">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="input" placeholder="name..." value=<?php echo $music['name'];?> /><br>
                    </div>
					<div class="divinp">
                    <label for="">Description:</label>
						<textarea name="description" cols="40" rows="4"  placeholder="<?php echo $music['description'];?>"></textarea>
					</div>
                    <div class="divinp">
                    <label for="">Photo:</label>
						<input type="file" name="foto">
					</div>
					<div class="divinp">
						<input type="submit" name="upload" value="Submit">
					</div>
				</form>
            </div>

<?php include 'footer.php'; ?>