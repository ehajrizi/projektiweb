<?php
include_once 'userMapper.php';

	$artistid = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteArtist($artistid);
 header("Location:dashboard.php");