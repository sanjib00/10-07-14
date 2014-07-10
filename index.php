<?php

function film_star($title,$genres){

film_title='';
film_star='';

foreach($films as $film_titles => $stars)  
{  
 echo " $film_titles is $stars <br />" ;   
}  

} 

$films = array(

			"genres" => array("comedy", "tragedy","action","romance"),
			"film_titles" => array("Big", "Star Wars","Titanic","French Kiss"),
			"stars" => array("Bill Murry", "Mark Hammel","Leonard Dicaprio","Cat"),
			);
			
 

?>  
