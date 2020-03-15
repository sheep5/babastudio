<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Latihan Switch</title>
</head>

<body>
<?php
    $nilai=$_POST["nilai"];
    switch ($nilai) {
		case $nilai>=91 && $nilai<=100:
			$grade="A";
			break;
			
		case $nilai>=81 && $nilai<=90:
			$grade="B";
			break;
			
		case $nilai>=71 && $nilai<=80:
			$grade="C";
			break;
		
		case $nilai>=61 && $nilai<=70:
			$grade="D";
			break;
 
		case $nilai>=51 && $nilai<=60:
			$grade="E";
			break;
 
		case $nilai>=41 && $nilai<=50:
			$grade="F";
			break;
			}
	echo "Perkiraan nilai anda adalah $nilai dengan grade $grade.";
  ?>
</body>
</html>