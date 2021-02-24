<?php
include_once 'userMapper.php';

	$userId = $_GET['userid'];
    $mapper = new UserMapper();
    $mapper->deleteUser($userid);
 header("Location:dashboard.php");


