<?php
include_once 'userMapper.php';

	$bookid = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteBook($bookid);
 header("Location:dashboard.php");