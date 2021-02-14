<?php
include_once 'userMapper.php';
include_once 'simpleUserClass.php';
if (isset($_GET['username']) && isset($_GET['reg-name']) && isset($_GET['reg-email'])) {
    $userid = $_GET['id'];
    $name = $_GET['reg-name'];
    $username = $_GET['username'];
    $email = $_GET['reg-email'];
    $simpleUser = new SimpleUser($name, $username, $email, "", 1);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userid);
    header("Location:../phpFiles/dashboard.php");
}
?>