<?php
include_once 'userMapper.php';

	$contactid = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteContact($contactid);
 header("Location:dashboard.php");