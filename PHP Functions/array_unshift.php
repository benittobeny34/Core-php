<?php 
 $animals = array("cat","dog","flamingo","cat","dog",'micky mouse','cat','flamingo','flamingo','flamingo','elephant','zeerabee','monkey');
print_r($animals);
$new_animals = array_unshift($animals,'lion');

print_r($animals);

 ?>