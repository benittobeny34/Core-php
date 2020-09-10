<?php 

//********************is_int() function ***************************//
    
    $value =  array(33,44.3,'beni','mani','dhina','football');
    foreach ($value as $val ) 
 
    if(is_int($val)){

    	echo "The Valus is integer</BR>";

    }
    else {
    	echo "The value is not an integer</BR>";
    }


    //********************is_file() function ***************************//
     

     $file = 'filecontent.txt';
     if(is_file($file)){
     	echo "yeah it's a file";
     }


   //********************array_slice() function ***************************//
   $chunk = array_slice($value,2,4);
   echo "</br>";
   print_r($chunk);


   //********************ucfirst() function ***************************//
   $name = "benitto raj";
   echo "</br>".ucfirst($name)."</br>";




 ?>