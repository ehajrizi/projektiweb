<?php
session_start();
include_once 'userMapper.php';
include_once 'simpleUserClass.php';
$userid = $_GET['userid'];
$username = $_GET['username'];
$simpleUser = new SimpleUser("",$username,"", "",0);

$mapper = new UserMapper();
$mapper->edit($simpleUser, $userid);
header("Location:dashboard.php");




