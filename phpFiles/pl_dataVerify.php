<?php
include_once 'PlaceClass.php';
include_once 'userMapper.php';
session_start();

if(isset ($_POST['submit_pl_btn'])){
	$submit = new SubmitLogic($_POST);
	$submit -> insertData();
}else{
	header("Location:../phpPages/Places.php");
}

class SubmitLogic{
    private $name = "";
    private $description = "";
    private $link = "";

    public function __construct($formData)
    {
		$this->name = $formData['name'];
        $this->description = $formData['description'];
		$this->link = $formData['link'];
        
    }

    public function insertData()
    {
        $data = new PlaceData($this->name, $this->description, $this->link);

        $mapper = new UserMapper();
       if(!empty($this->name) && !empty($this->description) && !empty($this->link)){
        $mapper->insertPlace($data);}
        header("Location:../phpPages/Places.php");
    }
}
?>