<?php 
  
  $content = "Ths is demo for unlink funcdtion ";

  file_put_contents("temp.txt",$content);
  
  unlink('temp.txt');
 ?>