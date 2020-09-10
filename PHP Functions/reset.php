<?php 	

$animals = array("cat","dog","flamingo","cat","dog",'micky mouse','cat','flamingo','flamingo','flamingo');
echo current($animals)."</br>";
echo next($animals)."</br>"; //array pointer move to the first index
echo next($animals)."</br>"; //second index
echo next($animals)."</br>"; //third index
echo next($animals)."</br>"; //......
echo next($animals)."</br>";
echo reset($animals)."</br>";//reset the array pointer to the begining
 ?>