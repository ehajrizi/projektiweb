<?php
include_once 'userMapper.php';
if (isset($_GET['id'])) {
    $userid = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteUser($userid);
    header("Location:../phpFiles/dashboard.php");
?>