<?<?php 
 $stack = array('banana','orange','apple');
 echo "Before array_shift() function ->";
 print_r($stack);
 $fruit = array_shift($stack);
 echo "</br> After array_shift() function ->";
 print_r($stack);

 echo "the popped value is:";
 print_r($fruit);
 ?>