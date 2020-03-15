<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Like Level Finder</title>
</head>

<body>
Your like level is this deep:<br>
<?php
$something=$_POST["something"];
$amount1=$_POST["amount1"];
for ($amount=1;$amount<=$amount1;$amount++) {
	echo "I like to $something the most!<br>";
}
?>
</body>
</html>