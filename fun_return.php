<?php
function mul($num1, $num2)
{
	echo "The result of $num1  and $num2 is:",$num1 * $num2 ."<br>";
	return $num1 * $num2;
}

$total1 = mul(30,2);
$total2 = mul(60,3);
echo $total1 + $total2;
 ?>