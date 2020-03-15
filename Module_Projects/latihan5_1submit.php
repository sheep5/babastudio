<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>True Identity Finder</title>
</head>

<body>
  <?php
    $name=$_POST["name"];
	if ($name=="PewDiePie") {
		echo "Wow! You're PewDiePie! You are my favorite YouTuber ever! : D";
		echo "<br><br>";
		echo "<img src='Images/pewdiepie_and_friends.jpg'>";
	}
	else if ($name=="CutiePieMarzia") {
		echo "Wow! You are PewDiePie's girlfriend! How lucky you are! : )";
		echo "<br><br>";
	}
	else {
		echo "Error <u><strong>505</strong></u> : <u><strong>UNKNOWN_NAME</strong></u>";
		echo "<br><br>";
		echo "<img src='Images/error.png'>";
	}
  ?>
</body>
</html>