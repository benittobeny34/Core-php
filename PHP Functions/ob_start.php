<?php 

$hello = "Welcome to the php world";

echo $hello;

$content = ob_get_contents();

ob_end_clean();	

echo $content;

ob_start('callback_function');

function callback_function($buffer){

	return str_replace('C++',"PHP",$buffer);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>
   <p>Benitto raj is loving C++</p>
</body>
</html>


 