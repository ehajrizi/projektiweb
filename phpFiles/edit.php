<?php
include_once 'header.php';
include_once 'userMapper.php';

if (isset($_GET['id'])) {
    $userid = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userid);
}
?>
<div class="contactUs-container">
    <h1>Edit</h1>
    <form class="mainForm" action="editUpdate.php" method="get">
        <div class="login forms form-style">
            <input type="text" name="id" style="display:none;" value=<?php echo $userid; ?>. />
            <label for="">Name:</label>
            <input type="text" name="name" class="input" placeholder="name..."/><br>
            <label for="">Username:</label>
            <input type="text" name="username" class="input" placeholder="username..."/><br>
			 <button type="submit">Enter</button>
        </div>
    </form>
</div>

<?php include 'footer.php'; ?>