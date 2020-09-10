<?php 

$start_time = microtime(true);
usleep(200000);
$end_time = microtime(true);
echo "The difference is:".$end_time - $start_time;
 ?>