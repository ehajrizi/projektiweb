<?php
session_start();
include_once 'userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
	$contactList = $mapper->getAllContactData();
} else {
    header("Location:./phpPages/getInvolved.php");
}

?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Find your roots</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
	
    <body>
        <div class ="all-backgound">
            <div class="header">
				<a href="../phpFiles/logout.php">Log Out</a>
				<a href="../phpFiles/dashboard.php">Dashboard</a>
                <a href="../phpPages/getInvolved.php">Get involved</a>

                <div class="dropdown">
                <button class="dropbtn">Discover
                    <i class="fa fa-caret-down"></i>
                </button>
					<div class="dropdown-content">
						<a href="../phpPages/books.php">Books</a>
						<a href="Music.php">Music</a>
						<a href="../phpPages/Places.php">Places</a>
					</div>
                </div>

                <a href="../phpPages/aboutUs.php">About Us</a>
                <a href="../phpPages/home.php">Home</a>
                
                
            </div>

		
<div class="dashboard_body">
		<h1>Dashboard</h1>
    <div class="dashb_list">
        <h2>User list:</h2>		
		<table class="dashboard_table">
            <thead>
                <tr>
                    <td>Music</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
				 <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['role']; ?></td>
						<td><a href=<?php echo "edit.php?id=" . $user['userid'];
                                    ?>>Edit</td>
                        <td><a href=<?php echo "delUser.php?id=" . $user['userid'];
                                    ?>>Delete</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
		
		

    </div>
</div>

<?php
include 'footer.php'
?>