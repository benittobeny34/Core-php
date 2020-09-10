<?php 

 $value = array("name" =>"benitto","age" => 22,"year" => 1999);

 $values = array_values($value);

 foreach($values as $val) {
       echo $val."</br>";
 }
 ?>