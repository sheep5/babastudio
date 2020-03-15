<?php
  ob_start();
  session_start();
  ob_end_clean();
  if (!isset($_SESSION["username"])) {
	  header("location:index.php");
  }
?>
<?php
  include ("../Function/adminfunction.php");
  include ("../Function/utility.php");
  include ("../Config/config.php");
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php head(); ?>
</head>

<body>
<div id="adminwrapper">
     <div id="adminheader"><!--Start Admin Header -->
          <?php get_header(); ?>
     </div><!--End Admin Header -->
     <div id="adminmenu"><!--Start Admin Menu -->
        <?php get_menu(); ?>
     </div><!--End Admin Menu -->
     <?php if(isset($_SESSION["username"])) { ?>
       <div id="userlogout">
         Welcome back, <strong><?php echo $_SESSION["username"] ?></strong> &nbsp; | &nbsp; <a href="logout.php">Logout</a>
       </div>
     <?php } ?>
     <div id="admincontent"><!--Start Admin Content -->
        <?php
        if(isset($_GET["news"])) {
			get_news();
		}
		else if(isset($_GET["blogs"])) {
			get_blogs();
		}
		else if(isset($_GET["comments"])) {
			get_comments();
		}
		else if(isset($_GET["members"])) {
			get_members();
		}
		else if(isset($_GET["addnews"])) {
			get_addnewsform();
		}
		else if(isset($_GET["addnewssubmit"])) {
			get_addnewssubmit();
		}
		else if(isset($_GET["editnews"])) {
			get_editnewsform();
		}
		else if(isset($_GET["editnewssubmit"])) {
			get_editnewssubmit();
		}
		else if(isset($_GET["deletenews"])) {
			get_deletenews();
		}
		else {
			get_news();
		}
		?>
     </div><!--Start Admin Content -->
     <div id="adminfooter"><!--Start Admin Footer -->
        <?php get_footer(); ?>
     </div><!--Start Admin Footer -->
   </div>
</body>
</html>
