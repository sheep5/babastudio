<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>File Viewer</title>
</head>

<body>
  <h2>Upload your file</h2>
  <form id="uploadform" name="uploadform" method="post" action="savefile.php" enctype="multipart/form-data">
    Your File &nbsp; : &nbsp;
    <input type="file" id="file" name="file" value="">
    <br>
    <input type="submit" name="upload" name="upload" value="Send">
  </form>
</body>
</html>