<?php 
  
  $numbers = array("beni",20,33.33,"raj","33");

  foreach($numbers as $num){
  	if(is_numeric($num)){
  		echo "Yeah it's a number -> $num </br>";
  		echo var_export($num)."</br>";
  	}
  	else{
  		echo "It's not a numeric -> $num</br>";
  		echo var_export($num)."</br>";
  	}
  }

?>