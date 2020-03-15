<?php
  if ($_FILES["file"]["error"]==0) {
	  $thefile=$_FILES["file"]["name"];
	  move_uploaded_file($_FILES["file"]["tmp_name"],"/Images/$thefile");
  }
  else {
	  $thefile="";
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>File Viewer</title>
</head>

<body>
  <h2>Show Uploaded File</h2>
  <?php
    if($thefile!="") { ?>
    <img src="images/<?php echo $thefile ?>" width="600">
    <?php } ?>
</body>
</html>