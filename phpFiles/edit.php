<?php
include_once 'header.php';
include_once 'userMapper.php';

if (isset($_GET['userid'])) {
    $userid = $_GET['userid'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userid);
}
?>
<div class="contactUs-container">
    <h1>Edit</h1>
    <form class="mainForm" action="editUpdate.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value="<?php echo $userid;?>" name="userid" />
            <label for="">Username:</label>
            <input type="text" name='username' class="input" placeholder="username...">
			 <button type="submit">Enter</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>