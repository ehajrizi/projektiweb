<?php
session_start();
include_once 'userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION["role"] == 1) {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
	$contactList = $mapper->getAllContactData();
	$bookList = $mapper->getAllBooks();
	$musicList = $mapper->getAllArtists();
	$placesList = $mapper->getAllPlaces();
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

</script>
    </head>
	
    <body>
        <div class ="all-backgound">
            <div class="header">
				<a href="../phpFiles/logout.php">Log Out</a>

                <?php
					if(isset($_SESSION["role"]) && $_SESSION["role"] == 1):
				?>
				<a href="dashboard.php">Dashboard</a>
				<?php else:?>
				<a href="../phpPages/getInvolved.php">Get involved</a>
				<?php endif; ?>


                <div class="dropdown">
                <button class="dropbtn">Discover
                    <i class="fa fa-caret-down"></i>
                </button>
					<div class="dropdown-content">
						<a href="../phpPages/books.php">Books</a>
						<a href="../phpPages/Music.php">Music</a>
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
                    <td>Name</td>
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

    <div class="dashb_list">
        <h2>Contact list:</h2>		
		<table class="dashboard_table">
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Subject</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
				 <?php
                foreach ($contactList as $contact) {
                ?>
                    <tr>
                        <td><?php echo $contact['firstname']; ?></td>
                        <td><?php echo $contact['lastname']; ?></td>
                        <td><?php echo $contact['subject']; ?></td>
                        <td><a href=<?php echo "delContact.php?id=" . $contact['contactid'];
                                    ?>>Delete</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="dashb_list">
        <h2>Book list:</h2>		
		<table class="dashboard_table">
            <thead>
                <tr>
                    <td>ISBN</td>
                    <td>Book Title</td>
                    <td>Book Cover</td>
                    <td>Author</td>
                    <td>Book Description</td>
                    <td>No. of Pages</td>
                    <td>Created By</td>
                    <td>Edited By</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
				 <?php
                foreach ($bookList as $book) {
                ?>
                    <tr>
                        <td><?php echo $book['isbn']; ?></td>
                        <td><?php echo $book['titulli']; ?></td>
                        <td><?php echo $book['foto']; ?></td>
                        <td><?php echo $book['autori']; ?></td>
                        <td><?php echo $book['pershkrimi']; ?></td>
                        <td><?php echo $book['pagenr']; ?></td>
                        <td><?php echo $book['created_by']; ?></td>
                        <td><?php echo $book['edited_by']; ?></td>
                        <td><a href=<?php echo "editBook.php?id=" . $book['bookid'];
                                    ?>>Edit</td>
                        <td><a href=<?php echo "delBook.php?id=" . $book['bookid'];
                                    ?>>Delete</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

        <div class="dashb_list">
        <h2>Artist list:</h2>		
		<table class="dashboard_table">
            <thead>
                <tr>
                    <td>Artist Name</td>
                    <td>Artist Description</td>
                    <td>Artist Photo</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
				 <?php
                foreach ($musicList as $music) {
                ?>
                    <tr>
                        <td><?php echo $music['name']; ?></td>
                        <td><?php echo $music['description']; ?></td>
                        <td><?php echo $music['foto']; ?></td>
                        <td><a href=<?php echo "editMusic.php?id=" . $music['artistid'];
                                    ?>>Edit</td>
                        <td><a href=<?php echo "delArtist.php?id=" . $music['artistid'];
                                    ?>>Delete</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

        <div class="dashb_list">
        <h2>Places list:</h2>		
		<table class="dashboard_table">
            <thead>
                <tr>
                    <td>Place</td>
                    <td>Place Description</td>
                    <td>Place Link</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
				 <?php
                foreach ($placesList as $place) {
                ?>
                    <tr>
                        <td><?php echo $place['name']; ?></td>
                        <td><?php echo $place['description']; ?></td>
                        <td><?php echo $place['link']; ?></td>
                        <td><a href=<?php echo "editPlace.php?id=" . $place['placeid'];
                                    ?>>Edit</td>
                        <td><a href=<?php echo "delPlace.php?id=" . $place['placeid'];
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