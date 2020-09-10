<?php 

$words = "I am benitto studying Ece department in reputed university";
$special = "I am^Sbenitto=studying Ece-department+in reputed university";

$keywords =  preg_split("!\s!",$words);
$more_keys = preg_split("![\s,+-^]!",$special,3);

print_r($keywords);
echo "</br>";
print_r($more_keys);
 ?>