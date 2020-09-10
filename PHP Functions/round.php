<?php 
const BR = "</br>";
echo round(4.2).'</br>';
echo round(3.3333333333333,2).BR;

echo round(4.5,0,PHP_ROUND_HALF_UP).BR;
echo round(4.5,0,PHP_ROUND_HALF_DOWN).BR;
echo round(4.5,0,PHP_ROUND_HALF_EVEN).BR;
echo round(4.5,0,PHP_ROUND_HALF_ODD).BR;

 ?>