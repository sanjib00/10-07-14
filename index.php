<?php

function film_star($title,$genres){

$film_title=' ';
$film_star=' ';

foreach($films as $film_titles => $stars)  
{  

if ($value  == $genere ){
	
	$film_title = $film[film_titles][$value];
	$film_star = $film[stars][$value];
	$film_details = array("$film[film_titles][$value]", "$film[stars][$value]");
    
}  
echo " $film_titles is $stars <br />" ;
} 
/*$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
*/
$films = array(

			"genres" => array("comedy", "tragedy","action","romance"),
			"film_titles" => array("Big", "Star Wars","Titanic","French Kiss"),
			"stars" => array("Bill Murry", "Mark Hammel","Leonard Dicaprio","Cat"),
			);
			
 $input_array = array("Bill", "Murray");
print_r(array_change_key_case($input_array, CASE_LOWER));
?>  
