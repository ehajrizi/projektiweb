<?php
require 'dbConfig.php';
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
include_once 'userMapper.php';
session_start();

if(isset ($_POST['loginbtn'])){
	$login = new LoginLogic($_POST);
	$login -> verifyData();
}else if(isset($_POST['regbtn'])){
	$register = new RegisterLogic($_POST);
	$register -> insertData();
}else{
	header("Location:../phpPages/home.php");
}

class LoginLogic{
	
	private $username = "";
	private $password = "";
	
	public function __construct($formData){
		$this -> username = $formData['username'];
		$this -> username = $formData['password'];
	}
	
	public function verifyData(){
		if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            echo '1';
            header("Location:../phpPages/getInvolved.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo '2';
            header('Location:../phpPages/home.php');
        } else{
			echo '3';
            header("Location:../phpPages/getInvolved.php");
		}
	}
	
	private function variablesNotDefinedWell($username, $password){
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }
	
	private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0){
			return false;
		}
        else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['userid'],$user['name'], $user['username'], $user['password'],$user['email'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['userid'],$user['name'], $user['username'], $user['password'],$user['email'], $user['role']);
                $obj->setSession();
            }
            return true;
        } else {
			return false;
		}
    }
}

class RegisterLogic{
    private $username = "";
    private $password = "";
    private $email = "";
    private $name = "";

    public function __construct($formData)
    {
		$this->name = $formData['reg-name'];
        $this->username = $formData['reg-username'];
		$this->email = $formData['reg-email'];
        $this->password = $formData['reg-password'];
        
    }

    public function insertData()
    {
        $user = new SimpleUser($this->name, $this->username, $this->email, $this->password, 0);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../phpPages/getInvolved.php");
    }
}
?>

