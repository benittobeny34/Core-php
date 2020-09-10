<?php 
 const BR = "</br>";
 if(defined('BR')){
 	echo "constant is defined";
 }
 else{
 	echo define('BR','</br>');
 	echo "Constant BR is currently defined.";
 }

 ?>