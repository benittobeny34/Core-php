<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gambling application</title>
    <link rel="stylesheet" href="gambling.css">
</head>
<body>
	<?php 
	$name=$email=$phone="";
	function fun($name,$email,$phone)
	  {
		  echo "Your name".$name."<br>";
		  echo "Your email".$email ."<br>";
		  echo "Your phone no".$phone."<br>";
		   echo "<h6>don't forget the mail id all the communication should be via mail id.</h6>";
	  }
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
      $name = $_POST["name"];
	  $email =$_POST["email"];
	  $phone =$_POST["phone"];
	
	  fun($name,$email,$phone);
     
	}

	  
	  echo "<h3>Thank you for submitting your data</h3>";
	  
    ?>
</body>
</html>
