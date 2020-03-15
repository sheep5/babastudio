<?php
  include ("function/function.php");
  include ("function/utility.php");
  include ("config/config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<?php head() ?>
</head>

<body>
<div id="wrapper">
    <div id="header">
      <!--- Start Header--->
      <?php get_header() ?>
      <!--- End Header --->
</div>
    <div id="menu">
      <!--- Start Menu --->
      <?php get_menu() ?>
      <!--- End Menu --->
</div>
    <div id="content">
      <!--- Start Content --->
      <div id="searchresult">
        <form id="searchbox" name="searchbox" method="post" action="index.php?searchresult">
          Search &nbsp; &nbsp;
          <input type="text" id="searchtext" name="searchtext" value="" placeholder="Search..." required>
          &nbsp;
          <input type="submit" id="searchgo" name="searchgo" value="Go">
        </form>
      </div>
      <br>
     <?php
	   if (isset($_GET["home"])) {
		   get_home();
	   }
	   else if (isset($_GET["about"])) {
		   get_about();
	   }
	   else if (isset($_GET["faq"])) {
		   get_faq();
	   }
	   else if (isset($_GET["news"])) {
		   get_news();
	   }
	   else if (isset($_GET["newsdetail"])) {
		   get_newsdetail();
	   }
	   else if (isset($_GET["contact"])){
		   get_contact();
	   }
	   else if (isset($_GET["searchresult"])) {
		   get_searchresult();
	   }
	   else {
		   get_home();
	   }
	 ?>
      <!--- End Content --->
</div>
    <div id="footer">
      <!--- Start Footer --->
      <?php get_footer() ?>
      <!--- End Footer --->
  </div>
  </div>
</body>
</html>
