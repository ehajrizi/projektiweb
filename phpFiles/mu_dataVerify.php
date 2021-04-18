<?php
session_start();
include_once 'dbConfig.php';
include_once 'userMapper.php';

if(isset($_POST['submit_mu_bobtn'])){
	$target = basename("../".($_FILES['foto']['name']));
	$db = mysqli_connect("localhost","root","","projektiweb-1");
	$image ="../".($_FILES['foto']['name']);
	$name = $_REQUEST['name'];
	$description = $_REQUEST['description'];
	$link = $_REQUEST['link'];
    $username = $_SESSION['username'];

	if(!empty($name) && !empty($_FILES['foto']['name']) && !empty($description) ){
		$sql = "Insert into music (name,description,foto,link,created_by) values ('$name','$description','$image','$link','$username')";
		mysqli_query($db,$sql);
	}

	if(move_uploaded_file($_FILES['foto']['tmp_name'],$target)){
		header("Location:../phpPages/Music.php");
	}else{
		header("Location:../phpPages/Music.php");
	}
}

?>