<?php
// Get heads
function get_head_home() {
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/defaultstyle.css">
<link rel="stylesheet" type="text/css" href="style/index.css">
<title>Home</title>
<?php    
}
?>

<?php
function get_head_profile() {
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/defaultstyle.css">
<link rel="stylesheet" type="text/css" href="style/profile.css">
<title>Profile</title>
<?php	
}
?>

<?php
function get_head_portfolio() {
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/defaultstyle.css">
<link rel="stylesheet" type="text/css" href="style/portfolio.css">
<title>Portfolio</title>
<?php	
}
?>

<?php
function get_head_blogs() {
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/defaultstyle.css">
<link rel="stylesheet" type="text/css" href="style/blogs.css">
<title>Blogs</title>
<?php	
}
?>

<?php
function get_head_blogdetail() {
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/defaultstyle.css">
<link rel="stylesheet" type="text/css" href="style/blog-detail.css">
<title>Blogs</title>
<?php	
}
?>

<?php
function get_head_contact() {
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/defaultstyle.css">
<link rel="stylesheet" type="text/css" href="style/contact.css">
<title>Profile</title>
<?php	
}
?>

<?php
function get_header() {
?>
<div id="logo"><img src="images/logo.png"></div>
<div id="login">
 	<form id="loginbar" name="loginbar" method="post" action="login.php">
    	Username:
    	<input type="text" id="membername" name="membername" value="" placeholder="DaBananaGuy" size="12" required>
    	&nbsp;
    	Password:
    	<input type="password" id="memberpassword" name="memberpassword" value="" placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;" size="12" required>
    	<button type="submit" form="loginbar" formaction="login.php" formmethod="post" name="loginbutton" class="custombutton">
    		<img src="images/loginbutton.png">
    	</button>
    </form>
    </div>
<?php
}
?>
<?php
//Get menus
function get_home_menu() {
?>
<ul>
	<li><a class="current" href="index.php?home">Home</a></li>
    <li><a href="index.php?profile">Profile</a></li>
	<li><a href="index.php?portfolio">Portfolio</a></li>
    <li><a href="index.php?blogs">Blogs</a></li>
    <li><a href="index.php?contact">Contact Me</a></li>
</ul>
<?php	
}
?>
<?php
function get_profile_menu() {
?>
<ul>
	<li><a href="index.php?home">Home</a></li>
    <li><a class="current" href="index.php?profile">Profile</a></li>
	<li><a href="index.php?portfolio">Portfolio</a></li>
    <li><a href="index.php?blogs">Blogs</a></li>
    <li><a href="index.php?contact">Contact Me</a></li>
</ul>
<?php	
}
?>
<?php
function get_portfolio_menu() {
?>
<ul>
	<li><a href="index.php?home">Home</a></li>
    <li><a href="index.php?profile">Profile</a></li>
	<li><a class="current" href="index.php?portfolio">Portfolio</a></li>
    <li><a href="index.php?blogs">Blogs</a></li>
    <li><a href="index.php?contact">Contact Me</a></li>
</ul>
<?php	
}
?>
<?php
function get_blogs_menu() {
?>
<ul>
	<li><a href="index.php?home">Home</a></li>
    <li><a href="index.php?profile">Profile</a></li>
	<li><a href="index.php?portfolio">Portfolio</a></li>
    <li><a class="current" href="index.php?blogs">Blogs</a></li>
    <li><a href="index.php?contact">Contact Me</a></li>
</ul>
<?php	
}
?>
<?php
function get_contact_menu() {
?>
<ul>
	<li><a href="index.php?home">Home</a></li>
    <li><a href="index.php?profile">Profile</a></li>
	<li><a href="index.php?portfolio">Portfolio</a></li>
    <li><a href="index.php?blogs">Blogs</a></li>
    <li><a class="current" href="index.php?contact">Contact Me</a></li>
</ul>
<?php	
}
?>

<?php
function get_search() {
?>
<form id="searchbar" name="searchbar" method="post" action="search.php">
	Search:
	<input type="text" id="searchterm" name="searchterm" value="" placeholder="WATCH_DOGES" size="13" required>
	<button type="submit" form="searchbar" formaction="search.php" formmethod="post" name="searchbutton" class="custombutton">
		<img src="images/searchbutton.png">
	</button>
</form>
<?php
}
?>

<?php
//Get slider
function get_slider() {
?>
<div id="slider-left">
	<img src="images/slider-img.jpg" align="left">
</div>
<div id="slider-right">
	<span id="greentitle">Welcome</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac velit vel velit ornare ullamcorper ac eu erat. Aenean convallis aliquam suscipit. Nunc ac sollicitudin magna, eget venenatis erat. Curabitur commodo leo nec viverra euismod. Nullam eget elementum dolor, egestas cursus neque.</p>
</div>
<?php
}
?>

<?php
//Get content
function get_home() {
?>
<div id="content-left">
	<span class="title">Last Blogs</span>
	<?php
        //3. Decide the number of data in a page
		$data_count=3;
		//4. Which page is active?
		if (isset($_GET["page"])) {
			$active_page=$_GET["page"]-1;
		}
		else {
			$active_page=0;
		}
		//5. Decide the initial data of an active page
		$initial_data=$active_page*$data_count;
		//6. Make a SQL syntax
		$sqlsyntax="SELECT * FROM blogs_tbl LIMIT $initial_data,$data_count";
		//7. Execute SQL Syntax
		$sqlblogs=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//8. Insert query results into an array variable
		$blogs=mysql_fetch_array($sqlblogs);
		//9. Show data with looping
	  ?>
      <?php do { ?>
      <!--- Start Looping Data --->
      <div id="blogitem" style="width:420px; display:list-item; list-style:none; margin-bottom:10px; font-color:#f3f3f3;">
        <span id="date"><?php echo indonesiandate($blogs["date"])?></span>
        <br>
        <a id="blogtitle" href="index.php?blogdetail&id=<?php echo $blogs["blog_id"]; ?>" style="font-color:#f3f3f3;"><span id="blogtitle"><?php echo $blogs["title"] ?></span></a>
        <br>
          <img src="images/blog-entry-img/<?php echo $blogs["image"] ?>" id="blog-img" align="left" width="187px" height="111px">
		  <span style="font-family:Minecraftia;"><?php echo substr($blogs["details"],0,200); ?></span>
      </div>
      <!--- End Looping Data --->
      <?php } while($blogs=mysql_fetch_array($sqlblogs));?>
</div>
<div id="content-right">
	<span class="title">Last Portfolio</span>
	<div id="right-top">
		<span id="portfolio-title">Portfolio 1</span>
		<br>
		<img src="images/portfolio-img.jpg" id="portfolio-img" align="left">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam velit non lorem pretium, id pharetra lacus facilisis.</p>
	</div>
	<div id="right-bottom">
		<span id="portfolio-title">Portfolio 2</span>
		<br>
		<img src="images/portfolio-img.jpg" id="portfolio-img" align="left">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam velit non lorem pretium, id pharetra lacus facilisis.</p>
	</div>
</div>
<?php	
}
?>

<?php
function get_profile() {
?>
<span class="title">Profile</span>
<div id="content-top">
	<div id="top-left">
		<img src="images/profile-pic.jpg">
	</div>
	<div id="top-right">
		<p>
			Name: Nathanael Hananto Putro
			<br>
			Gender: Male
			<br>
			YouTube alias: GamerNHP
			<br>
			Twitter alias: @gamernhp
		</p>
	</div>
</div>
<div id="content-bottom">
	<span class="subtitle">Biography</span>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et commodo dui, eget varius metus. Vestibulum sed pulvinar nisl, at pellentesque nunc. Suspendisse fringilla vitae justo in mollis. Aenean non velit vel neque scelerisque lobortis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vitae mauris purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ornare nulla vitae euismod semper.</p>

	<p>Integer augue dolor, gravida non dolor sed, blandit egestas lorem. Ut fermentum ornare lacinia. Sed id varius augue. Suspendisse sed tellus eu lectus iaculis feugiat. Nam ac vestibulum ante. Fusce ut nisl ornare, lacinia elit vel, cursus enim. Nulla et elementum felis. Ut porttitor odio ipsum, sed bibendum nibh tristique eget. Aliquam at hendrerit ante, ut vulputate odio. Mauris et tellus quis felis imperdiet scelerisque sit amet non risus. Nulla egestas malesuada ante id gravida. Donec pharetra lacinia lacus, ac lobortis elit viverra sed. Suspendisse potenti. Praesent ut ullamcorper ipsum. Donec turpis libero, laoreet ac purus ac, dapibus rhoncus odio.</p>

	<p>Aenean dolor ante, porttitor at accumsan ac, venenatis id dolor. Aenean porttitor congue facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam vel odio urna. Cras posuere dictum lacus nec mattis. Fusce ut dictum odio. Morbi ut tellus eget felis fermentum tristique. Nulla facilisi. Duis eget eros eget orci eleifend ultrices id vehicula dolor. Etiam ut volutpat mi. Pellentesque gravida nunc ligula, at porttitor tortor pharetra ac.</p>

	<p>Maecenas scelerisque felis massa, sed egestas massa tempor et. Pellentesque massa velit, porta nec magna id, posuere tempor eros. Aliquam nulla lacus, hendrerit at semper in, porta sit amet leo. Nunc lacinia nibh at cursus placerat. Integer aliquet lorem nec nibh cursus tincidunt. Etiam auctor vestibulum condimentum. Duis quis massa scelerisque, tempus enim vel, bibendum lorem.</p>
</div>
<?php	
}
?>

<?php
function get_portfolio() {
?>
<span class="title">Portfolio</span>
<br>
<?php
	    
		//3. Decide the number of data in a page
		$data_count=6;
		//4. Which page is active?
		if (isset($_GET["page"])) {
			$active_page=$_GET["page"]-1;
		}
		else {
			$active_page=0;
		}
		//5. Decide the initial data of an active page
		$initial_data=$active_page*$data_count;
		//6. Make a SQL syntax
		$sqlsyntax="SELECT * FROM portfolio_tbl LIMIT $initial_data,$data_count";
		//7. Execute SQL Syntax
		$sqlportfolio=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//8. Insert query results into an array variable
		$portfolio=mysql_fetch_array($sqlportfolio);
		//9. Show data with looping
	  ?>
      <?php do { ?>
      <!--- Start Looping Data --->
      <div class="portfolioitem" style="display:list-item; list-style:none; float:left; width:33.3%; margin-bottom:10px; font-color:#f3f3f3;">
      <img src="images/portfolio-entry-img/<?php echo $portfolio["image"] ?>">
      <br>
        <a href="index.php?portfoliodetail&id=<?php echo $portfolio["portfolio_id"]; ?>">
        <span style="font-family:Minecraftia;"><?php echo $portfolio["title"] ?></span></a>
      </div>
      <!--- End Looping Data --->
      <?php } while($news=mysql_fetch_array($sqlportfolio));?>
     <?php
	  //10. Specify the actual amount of data
	  $sqlsyntax2="SELECT * FROM portfolio_tbl";
	  $total=mysql_query($sqlsyntax2,$GLOBALS["connect"]);
	  $total_data=mysql_num_rows($total);
	  //10. How many pages were obtained?
	  $total_page=ceil($total_data/$data_count);
	  //12. Show page links with looping
	 ?>
     <?php for($i=1;$i<=$total_page;$i++) { ?>
       <a href="index.php?portfolio&page=<?php echo $i ?>">
       <?php echo $i ?>
       </a> &nbsp;
     <?php } ?>
<?php	
}
?>

<?php
function get_blogs() {
?>
<span class="title">Blogs</span>
<br>
<?php
        //3. Decide the number of data in a page
		$data_count=3;
		//4. Which page is active?
		if (isset($_GET["page"])) {
			$active_page=$_GET["page"]-1;
		}
		else {
			$active_page=0;
		}
		//5. Decide the initial data of an active page
		$initial_data=$active_page*$data_count;
		//6. Make a SQL syntax
		$sqlsyntax="SELECT * FROM blogs_tbl LIMIT $initial_data,$data_count";
		//7. Execute SQL Syntax
		$sqlblogs=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//8. Insert query results into an array variable
		$blogs=mysql_fetch_array($sqlblogs);
		//9. Show data with looping
	  ?>
      <?php do { ?>
      <!--- Start Looping Data --->
      <div id="blogitem" style="display:list-item; height:300px; list-style:none; margin-bottom:10px; font-color:#f3f3f3;">
        <span id="date"><?php echo indonesiandate($blogs["date"])?></span>
        <br>
        <a class="title" href="index.php?blogdetail&id=<?php echo $blogs["blog_id"]; ?>"><span style="font-family:Minecraftia;"><?php echo $blogs["title"] ?></span></a>
        <br>
          <img src="images/blog-entry-img/<?php echo $blogs["image"] ?>" id="blog-img" align="left" width="224px" height="113px">
		  <span style="font-family:Minecraftia;"><?php echo substr($blogs["details"],0,200); ?></span>
      </div>
      <!--- End Looping Data --->
      <?php } while($blogs=mysql_fetch_array($sqlblogs));?>
      <?php
	  //10. Specify the actual amount of data
	  $sqlsyntax2="SELECT * FROM blogs_tbl";
	  $total=mysql_query($sqlsyntax2,$GLOBALS["connect"]);
	  $total_data=mysql_num_rows($total);
	  //10. How many pages were obtained?
	  $total_page=ceil($total_data/$data_count);
	  //12. Show page links with looping
	 ?>
     <?php for($i=1;$i<=$total_page;$i++) { ?>
       <a href="index.php?blogs&page=<?php echo $i ?>">
       <?php echo $i ?>
       </a> &nbsp;
     <?php } ?>
<?php
}
?>

<?php
function get_blogdetail() {
?>
<?php
		//3. Contain an URL parameter
		$blog_id=$_GET["blog_id"];
		//4. Make a SQL syntax
		$sqlsyntax="SELECT * FROM blogs_tbl WHERE blog_id=$blog_id";
		//5. Execute SQL syntax
		$sqldetail=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//6. Insert query results into an array variable
		$blogdetail=mysql_fetch_array($sqldetail);
	  ?>
  <span class="date">
    <?php 
	echo indonesiandate($blogdetail["date"]);
    ?>
  </span>
  <span style="font-family:Minecraftia;">
   <?php 
	echo $blogdetail["title"];
    ?>
  </span>
  <img src="images/blog-entry-img/<?php echo str_replace(chr(13),"<br>",$blogdetail["image"]); ?>">
  <p><?php echo $blogdetail["detail"]; ?></p>
<?php	
}
?>
<?php
function get_contact() {
?>
<span class="title">Contact Me</span>
<form id="contactform" name="contactform" method="post" action="contact.php">
	<span class="contact-desc">Name:</span>
	<input type="text" id="contactname" name="contactname" value="" placeholder="Doge Dogginson" size="28" required>
	<br>
	<br>
	<span class="contact-desc">E-mail:</span>
	<input type="email" id="contactemail" name="contactemail" value="" placeholder="doge.dogginson@yahoo.co.jp" size="28" required>
	<br>
	<br>
	<span class="contact-desc">Message:</span>
	<br>
	<textarea id="contactmsg" name="contactmsg" cols="28" rows="10" required></textarea>
	<br>
	<br>
	<button type="submit" form="contactform" formaction="contact.php" formmethod="post" name="sendbutton" class="custombutton">
		<img src="images/sendbutton.png">
	</button>
</form>
<?php	
}
?>

<?php
//Get footer
function get_footer() {
?>
<br>
<span>Copyright &copy; 2014 Nathanael Hananto Putro. All Rights Reserved.</span>
<?php
}
?>