<?php
session_start();
include_once 'dbConfig.php';
include_once 'userMapper.php';

if(isset($_POST['submitbobtn'])){
	$target = basename("../".($_FILES['foto']['name']));
	$db = mysqli_connect("localhost","root","","projektiweb-1");
	$image ="../".($_FILES['foto']['name']);
	$titulli = $_REQUEST['titulli'];
	$autori = $_REQUEST['autori'];
	$pershkrimi = $_REQUEST['pershkrimi'];
	$isbn = $_REQUEST['isbn'];
	$pagenr = $_REQUEST['pagenr'];
	$username = $_SESSION['username'];

	if(!empty($titulli) && !empty($_FILES['foto']['name']) && !empty($autori) && !empty($pershkrimi) && !empty($isbn) && !empty($pagenr)){
		$sql = "Insert into books (titulli,foto,autori,pershkrimi,isbn,pagenr,created_by) values ('$titulli','$image','$autori','$pershkrimi','$isbn','$pagenr','$username')";
		mysqli_query($db,$sql);
	}

	if(move_uploaded_file($_FILES['foto']['tmp_name'],$target)){
		header("Location:../phpPages/books.php");
	}else{
		header("Location:../phpPages/books.php");
	}
}

?>