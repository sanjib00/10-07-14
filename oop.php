<?php

		class User{
		
			protected function userAge(){
			
			return 'some value';
			}
			
		}
		
		class Person extends User{
		public function getUserage(){
		return $this->userAge();
	}
	
	}
	$person = new Person();
	echo $person->getUserAge();
	echo $person->userAge();

?>