<?php
session_start();
include_once 'userMapper.php';
include_once 'PlaceClass.php';
$placeid = $_GET['id'];
$name = $_GET['name'];
$description = ($_GET['description']);
$link = $_GET['link'];
$placeData = new PlaceData($name,$description,$link);

$mapper = new UserMapper();
$mapper->editPlace($placeData, $placeid);
header("Location:dashboard.php");