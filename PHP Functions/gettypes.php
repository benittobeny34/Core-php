<?php 

$values = array(20,'beni',33.33,null,new stdClass);

foreach($values as $value){
	echo gettype($value)."</br>";
}

 ?>