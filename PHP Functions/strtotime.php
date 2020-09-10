<?php 
echo strtotime('now')."</br>";
echo date('jS F, Y',strtotime('now'))."</br>";
echo date('jS F, Y',strtotime('next week'))."</br>";
echo date('jS F, Y',strtotime('+1 week 2 days 4 hours 2 seconds'))."</br>";
echo date('jS F, Y',strtotime('+1 year 5 month 56 days 8 hours 33 seconds'))."</br>";

 ?>