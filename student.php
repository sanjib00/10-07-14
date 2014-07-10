<?php

//phpinfo();
class User{              //declaring a object
	var $name = "FTFL";
	var $email = "";
	
	function __construct($name="FTFL", $email="lict@ftfl.com"){
	
		$this->name = $name;
		$this->email = $email;
		}
		function getName(){
			return $this->name;

}
		function getEmail(){
			return $this->email;

}
		


//$user = new User();      //instantiate the object from the class
$user1 = new User();
$user2 = new User();

//var_dump($user);
//echo $user->name;
$user->name= 'TestFTFL';
$user1->name= 'oop';

echo $user->getName();
echo $user1->getName();

echo $user1::
?>