<?<?php 
 $stack = array('banana','orange','apple');
 echo "Before array_pop() function ->";
 print_r($stack);
 $fruit = array_pop($stack);
 echo "</br> After array_pop() function ->";
 print_r($stack);

 echo "</br>the popped value is:";
 print_r($fruit);
 ?>