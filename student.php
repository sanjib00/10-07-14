<?php

//phpinfo();
class User{              //declaring a object
	var $name = "FTFL";
	var $email = "";
		function getName(){
			return "FTFL2";

}
}

$user = new User();      //instanttiate the object from the class
//var_dump($user);
echo $user->name;

echo $user->getName();

?>