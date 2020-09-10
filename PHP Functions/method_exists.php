<?php 
 
 class Animal{

 	function cat(){
 	echo "cat";
     }
 }

 $val = new Animal();

 echo method_exists($val,'cat');

 ?>