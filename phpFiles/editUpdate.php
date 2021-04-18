<?php
session_start();
include_once 'userMapper.php';
include_once 'userClass.php';
include_once 'simpleUserClass.php';
$userid = $_GET['id'];
$username = $_GET['username'];
$name = $_GET['name'];
$email = $_GET['email'];
$role = $_GET['role'];
$simpleUser = new SimpleUser($name,$username,$email,"",$role);

$mapper = new UserMapper();
$mapper->edit($simpleUser, $userid);
header("Location:dashboard.php");




