<?php
$num1 = 10;
$num2 = '10';
$num3  = 20;
$num4 = 30;
if($num1 == $num2)
{
	echo "Equal";
}
else
{
	echo "not Equal" . "<br>";
}
if ($num1 === $num2 )
	echo "Identical";
else
	echo "<br>"."Not Identical";
if ($num3 <> $num4)
	echo " <br> <b>$num3 and $num4 are NOt Equal<b>";

//Logical operations
/*
$num1 and $num2   --> Both num1 and num2 to be true it will be true;
$num1 && $num2    --> Both num1 and num2 to be true it will be true;
$num1 or $num2    --> Either num1 or num2 is true it will be true;
$num1 || $num2    --> Either num1 or num2 is true it will be true;
$num1 xor $num2   --->True if  Either num1 is true or num2 is true but not both 

*/

