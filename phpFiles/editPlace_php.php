<?php
include_once 'header.php';
include_once 'userMapper.php';

if (isset($_GET['id'])) {
    $placeid = $_GET['id'];
    $mapper = new UserMapper();
    $place = $mapper->getPlaceByID($placeid);
}
?>

<h1>Edit</h1>
				
			<div id="comments">

                <form id="bform" method="get"  action="editPlaceUpdate.php">
                    <input type="text" name="id" style="display:none;" value=<?php echo $placeid; ?>. />
                    <div class="divinp">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="input" placeholder="name..." value=<?php echo $place['name'];?> /><br>
                    </div>
					<div class="divinp">
                    <label for="">Description:</label>
						<textarea name="description" cols="40" rows="4"  placeholder="<?php echo $place['description'];?>"></textarea>
					</div>
                    <div class="divinp">
                    <label for="">Link:</label>
                    <input type="url" name="link" class="input" placeholder="<?php echo $place['link'];?>"/><br>
                    </div>
					<div class="divinp">
					<button type="submit">Submit</button>
					</div>
				</form>
            </div>

<?php include 'footer.php'; ?>