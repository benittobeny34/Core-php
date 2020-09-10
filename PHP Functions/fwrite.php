<?php 

$file=fopen('filecontent.txt','a+');
$add = "These function's are teached by Clever Techie";

fwrite($file,$add);
echo "File content added successfully please open the file and verify";
fclose($file);
 ?>