<?php 
function multiply($n1, $n2, $n3){
 
 print_r(func_get_args('multiply'));
 echo "</br>";
 print_r(func_num_args());
}

multiply(3,4,5);
 ?>
