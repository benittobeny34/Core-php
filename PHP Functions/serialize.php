<?php 

$values = array("mani","beni","dhina","partha");
$serialize =  serialize($values);
echo $serialize;
print_r(unserialize($serialize));


 ?>