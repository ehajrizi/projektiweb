<?php
session_start();
include_once 'userMapper.php';
include_once 'MusicClass.php';
$artistid = $_GET['id'];
$name = $_GET['name'];
$description = $_GET['description'];
$foto = "../".($_GET['foto']);
$musicData = new MusicData($name,$description,$foto);

$mapper = new UserMapper();
$mapper->editArtist($musicData, $artistid);
header("Location:dashboard.php");