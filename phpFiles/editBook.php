<?php
include_once 'header.php';
include_once 'userMapper.php';

if (isset($_GET['id'])) {
    $bookid = $_GET['id'];
    $mapper = new UserMapper();
    $book = $mapper->getBookByID($bookid);
}
?>

<h1>Edit</h1>
				
			<div id="comments">

                <form id="bform" method="get"  action="editUpdateBook.php" enctype="multipart/form-data">
					<input type="hidden" name="size" value="1000000">
                    <input type="text" name="id" style="display:none;" value=<?php echo $bookid;?> />
                    <div class="divinp">
                    <label for="">Title:</label>
                    <input type="text" id="titulli" name="titulli" class="input" placeholder="title..." value=<?php echo $book['titulli']; ?> /><br>
                    </div>
					<div class="divinp">
                    <label for="">Cover:</label>
						<input type="file" id="foto" name="foto" />
					</div>
                    <div class="divinp">
                    <label for="">Author:</label>
                    <input type="text"id="autori" name="autori" class="input" placeholder="author..." value=<?php echo $book['autori']; ?> /><br>
                    </div>
					<div class="divinp">
                    <label for="">Description:</label>
						<textarea name="pershkrimi" id="pershkrimi" cols="40" rows="4"  placeholder="<?php echo $book['pershkrimi'];?>" /></textarea>
					</div>
                    <div class="divinp">
                    <label for="">ISBN:</label>
                    <input type="number" id="isbn" name="isbn" class="input" placeholder="ISBN..." value=<?php echo $book['isbn']; ?> /><br>
                    </div>
                    <div class="divinp">
                    <label for="">Number of Pages:</label>
                    <input type="number" id="pagenr" name="pagenr" class="input" placeholder="Page Number..." value=<?php echo $book['pagenr']; ?> /><br>
                    </div>
					<div class="divinp">
						<input type="submit" id="submitbobtn" name="upload" value="Submit">
					</div>
				</form>
            </div>

            <script src="../jsFiles/book.js"></script>

<?php include 'footer.php'; ?>