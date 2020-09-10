<html>
 <head>
 
 </head>
 <body>
 
 </body>
</html>

<?php 
session_start();

$_SESSION['Name']='benitto';
$_SESSION['Age']=20;
$_SESSION['Weight']=45;

echo "Done";
?>