<?php 
  
  $content = "it's a good day to die";

  file_put_contents('filecontent.txt', $content);

  $more = "----This is more content \n hi how are you";

  file_put_contents('filecontent.txt',$more,FILE_APPEND | LOCK_EX);

 $get_content = file_get_contents('filecontent.txt');

 echo $get_content;

 ?>