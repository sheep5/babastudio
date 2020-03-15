<?php
//Activate session
ob_start();
session_start();
ob_end_clean();

  //1. Connection to database server
  $connect=mysql_connect("localhost","root","");
  //2. Choose a database
  mysql_select_db("nathanael_db",$connect);
  //3. Contain input from form
  $membername=$_POST["membername"];
  $memberpassword=md5($_POST["memberpassword"]);
  //4. Make a SQL syntax
  $sqlsyntax="SELECT * FROM member_table WHERE membername='$membername' AND memberpassword='$memberpassword'";
  //5. Execute SQL syntax
  $sqllogin=mysql_query($sqlsyntax,$connect);
  //6. Insert query results into an array variable
  $login=mysql_fetch_array($sqllogin);
  //7. Check if result of executing SQL syntax has a result
  if (!empty($login)) {
	//If available
	//Make session variable
	$_SESSION["membername"]=$membername;
	//Return to index.php
	header("location:index.php");
  }
  else {
	 //If not available
	  header("location:index.php?loginerror");
  }
?>