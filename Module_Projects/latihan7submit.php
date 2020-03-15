<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login Form</title>
</head>

<body>
<?php
  $usr=$_POST["usr"];
  $pass=$_POST{"pass"};
  if ($usr=="nathanaelhp" && $pass=="260601Nhp") {
	  echo "You are now logged in!";
  }
  else {
	echo "Your username and/or password is wrong. Please try again.";  
  }
?>
</body>
</html>