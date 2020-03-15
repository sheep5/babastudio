<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Simple Online Calculator</title>
</head>

<body>
<?php
  $x=$_GET["x"];
  $process=$_GET["process"];
  $y=$_GET["y"];
  $sum1=$x+$y;
  $sum2=$x-$y;
  $sum3=$x*$y;
  $sum4=$x/$y;
  if ($process=="+") {
	  echo "$x + $y = $sum1";
  }
  else if ($process=="-") {
	  echo "$x - $y = $sum2";
  }
  else if ($process=="*") {
	  echo "$x x $y = $sum3";
  }
  else {
	  echo "$x / $y = $sum4";
  }
?>
</body>
</html>