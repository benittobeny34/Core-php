<?php 
 
 $data  = "This is demo for rtrim function         ";

 var_dump($data);

 echo "</br>";

 var_dump(rtrim($data));

 $data  = "This is demo for rtrim function    remove";

 echo "</br>".$data."</br>";

 var_dump(rtrim($data,"remove"));
 ?>