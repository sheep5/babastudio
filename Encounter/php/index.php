<?php
include ("function/function.php");
include ("config/config.php");
include ("function/utility.php");
?>

<!doctype html>
<html>
<head>
<?php
if (isset($_GET["home"])) {
	get_head_home();
}
else if (isset($_GET["profile"])) {
	get_head_profile();
}
else if (isset($_GET["portfolio"])) {
	get_head_portfolio();
}
else if (isset($_GET["blogs"])) {
	get_head_blogs();
}
else if (isset($_GET["blogdetail"])) {
	get_head_blogdetail();
}
else if (isset($_GET["contact"])) {
	get_head_contact();
}
else {get_head_home();}
?>
</head>

<body>
<div id="wrapper">
	<div id="header">
    <?php get_header(); ?>
	</div>
	<div id="menu">
    <?php
		if (isset($_GET["home"])) {
			get_home_menu();
		}
		else if (isset($_GET["profile"])) {
			get_profile_menu();
		}
		else if (isset($_GET["portfolio"])) {
			get_portfolio_menu();
		}
		else if (isset($_GET["blogs"])) {
			get_blogs_menu();
		}
		else if (isset($_GET["blogdetail"])) {
			get_blogs_menu();
		}
		else if (isset($_GET["contact"])) {
			get_contact_menu();
		}
		else {get_home_menu();}
	?>
	</div>
    <div id="slider">
    <?php
		if (isset($_GET["home"])) {
			get_slider();
		}
		else{}
	?>
    </div>
    <div id="content">
    <?php
		if (isset($_GET["home"])) {
			get_home();
		}
		else if (isset($_GET["profile"])) {
			get_profile();
		}
		else if (isset($_GET["portfolio"])) {
			get_portfolio();
		}
		else if (isset($_GET["blogs"])) {
			get_blogs();
		}
		else if (isset($_GET["blogdetail"])) {
			get_blogdetail();
		}
		else if (isset($_GET["contact"])) {
			get_contact();
		}
		else {get_home();}
	?>
    </div>
    <div id="footer">
    <?php
		get_footer();
	?>
    </div>
</div>
</body>
</html>