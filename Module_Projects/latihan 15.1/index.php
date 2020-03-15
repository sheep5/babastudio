<?php
  include ("function/function.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<?php
  get_head()
?>
</head>

<body>
  <div id="wrapper">
    <div id="header">
      <!---Start Header --->
       <?php
	     get_header()
	   ?>
      <!---End Header --->      
    </div>
    <div id="menu">
      <!--- Start Menu --->
        <?php
		  get_menu()
		?>
      <!--- End Menu --->
    </div>
    <div id="content">
      <!--- Start Content--->
       <?php
	     get_leftcontent()
	   ?>
         
     <div id="rightcontent">
      <?php
	    if (isset($_GET["home"])) {
			get_home();
		}
		else if (isset($_GET["gallery"])) {
			get_gallery();
		}
		else {
			get_contact();
		}
	  ?>
    </div>
    <div class="cleardiv"></div>
    <div id="footer">
      <?php
	    get_footer()
	  ?>
    </div>
  </div> 
</body>
</html>
