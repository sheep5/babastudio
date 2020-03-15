<?php
  ob_start();
  session_start();
  ob_end_clean();

?>
<?php
  include ("Config/config.php");
  include ("Function/function.php");
  include ("Function/utility.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<?php head () ?>
</head>

<body background="Images/2181045.png">
<div id="wrapper">
    <div id="header">
      <!--- Start Header--->
      <?php get_header () ?>
      <!--- End Header --->
</div>
    <div id="menu">
      <!--- Start Menu --->
      <?php get_menu () ?>
      <!--- End Menu --->
</div>
    <div id="content">
      <!--- Start Content --->
      <div id="membersearch">
        <div id="member">
        <!--- Start Member --->
        <?php if (isset($_SESSION["membername"])) { ?>
          <strong><?php echo $_SESSION["membername"]?></strong>
          &nbsp; | &nbsp;
          <a href="logout.php">Log out</a>
        <?php } else { ?>
        <form id="login" name="login" method="post" action="login.php">
          E-mail &nbsp; : &nbsp;
          <input type="email" id="membername" name="membername" size="12" value="" placeholder="youremail@email.com" required>
          &nbsp; &nbsp;
          Password &nbsp; : &nbsp;
          <input type="password" id="memberpassword" name="memberpassword" size="12" value="" placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;" required>
          <br>
          <input type="submit" id="submitlogin" name="submitlogin" value="Login">
        </form>
        <br>
        Don't have an account? Don't worry, <a href="index.php?registrationform">register</a> now!
        <?php } ?>
        
        <?php if (isset($_GET["loginerror"])) {?>
          <br>
          <span style="color:#F00">
          Either your e-mail address or password is wrong; please try again.
          </span>
        <?php } ?>
        <!--- End Member --->
        </div>
        <div id="search">
        <!--- Start Search --->
        <form id="searchbox" name="searchbox" method="post" action="index.php?searchresult">
          Search &nbsp; &nbsp;
          <input type="text" id="searchtext" name="searchtext" value="" placeholder="Search..." required>
          &nbsp;
          <input type="submit" id="searchgo" name="searchgo" value="Go">
        </form>
        <!--- End Search --->
        </div>
      </div>
      <div class="clearfloat"></div>
      <br>
     <?php
	   if (isset($_GET["home"])) {
		   get_home();
	   }
	   else if (isset($_GET["about"])) {
		   get_about();
	   }
	   else if (isset($_GET["blogs"])) {
		   get_blogs();
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
	   else if (isset($_GET["commentsubmit"])) {
		   get_commentsubmit();
	   }
	   else if (isset($_GET["registrationform"])) {
		   get_registrationform();
	   }
	   else if (isset($_GET["register"])) {
	       get_register();
	   }
	   else {
		   get_home();
	   }
	 ?>
      <!--- End Content --->
</div>
    <div id="footer">
      <!--- Start Footer --->
      <?php get_footer () ?>
      <!--- End Footer --->
  </div>
  </div>
</body>
</html>
