<?php
include_once 'userMapper.php';

	$userid = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteUser($userid);
 header("Location:dashboard.php");


