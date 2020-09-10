<?php 

$json = '{"a":1,"b":2}';
var_dump(json_decode($json));//normalarray
var_dump(json_decode($json,TRUE)); //associated array
// json decode converts key value pair to array form
//json encode conversts array form into json format(key,value) pair

 ?>