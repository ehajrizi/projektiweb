<?php
include_once 'userMapper.php';

	$id = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteComment($id);
 header("Location:dashboard.php");