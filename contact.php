<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>
</head>
<body>
<?php
  $myEmailAddress="lemayiannakolah@gmail.com";
  $subject="Email from Anything for Growth";

  $name= $_POST['sname'];
  $email= $_POST['semail'];
  $message= $_POST['comment'];
  $header= "from: $name <$email>";

  mail($myEmailAddress, $subject, $message, $header);
>	
</body>
</html>
