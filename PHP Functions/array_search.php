<?php 

$animals = array("cat","dog","flamingo","cat","dog",'micky mouse','cat','flamingo','flamingo','flamingo');
$unique_array = array_merge(array_unique($animals));
print_r($unique_array);
echo array_search("cat",$unique_array);
//not ccompleted
 ?>