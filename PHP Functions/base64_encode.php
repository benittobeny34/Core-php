<?php 

$text = "My name is benitto";
$encode = base64_encode($text);
echo $encode."</br>";
echo base64_decode($encode);

 ?>