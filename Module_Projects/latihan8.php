<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Syntax "if" untuk Angka</title>
</head>

<body>
  <?php
    $umur=INF;
	if ($umur>18) {
		echo "Your age is $umur years old. Access Granted!";
	}
	else {
		echo "Your age is $umur years old. Access Denied! Intruder detected! Code RED Alert! Lockdown commencing...";
	}
  ?>
</body>
</html>