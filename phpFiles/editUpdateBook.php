<?php
session_start();
include_once 'userMapper.php';
include_once 'bookClass.php';
$bookid = $_GET['id'];
$titulli = $_GET['titulli'];
$foto = "../".($_GET['foto']);
$autori = $_GET['autori'];
$pershkrimi = $_GET['pershkrimi'];
$isbn = $_GET['isbn'];
$pagenr = $_GET['pagenr'];
$bookData = new BookData($titulli,$foto,$autori,$pershkrimi,$isbn,$pagenr);

$mapper = new UserMapper();
$mapper->editBook($bookData, $bookid);
header("Location:dashboard.php");