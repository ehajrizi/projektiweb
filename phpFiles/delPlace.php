<?php
include_once 'userMapper.php';

	$placeid = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deletePlace($placeid);
 header("Location:dashboard.php");