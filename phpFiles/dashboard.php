<?php

include_once 'userMapper.php';
if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
	//header("Location:../phpFiles/dashboard.php");
} else {
    header("Location:../phpPages/getInvolved.php");
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
                <a href="../phpFiles/dashboard.php">Dashboard</a>
                
            </div>


<div>
    <h1>This is the Dashboard page</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Emri</td>
                    <td>Mbiemri</td>
                    <td>Email</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['userLastName']; ?></td>
                        <td><?php echo $user['userEmail']; ?></td>
                        <td><a href=<?php echo "../businessLogic/detailsUser.php?id=" . $user['userid']; //to be continued by students
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "edit.php?id=" . $user['userid'];
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "deleteUser.php?id=" . $user['userid'];
                                    ?>>Fshij</td>
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