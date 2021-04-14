<?php
include_once 'contactData.php';
include_once 'userMapper.php';
session_start();

if(isset ($_POST['submitbtn'])){
	$submit = new SubmitLogic($_POST);
	$submit -> insertData();
}else{
	header("Location:../phpPages/aboutUs.php");
}

class SubmitLogic{
    private $firstname = "";
    private $lastname = "";
    private $subject = "";

    public function __construct($formData)
    {
		$this->firstname = $formData['firstname'];
        $this->lastname = $formData['lastname'];
		$this->subject = $formData['subject'];
        
    }

    public function insertData()
    {
        $data = new ContactData($this->firstname, $this->lastname, $this->subject);

        $mapper = new UserMapper();
       if(!empty($this->firstname) && !empty($this->lastname) && !empty($this->subject)){
        $mapper->insertContactData($data);}
        header("Location:../phpPages/aboutUs.php");
    }
}
?>