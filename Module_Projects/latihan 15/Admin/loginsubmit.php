<?php
  ob_start();
  session_start();
  ob_clean();
  
  include ("../Config/config.php");
  //3. Define variables
  $username=$_POST["username"];
  $userpassword=md5($_POST["userpassword"]);
  //4. Define a SQL syntax
  $sqlsyntax="SELECT * FROM user_table WHERE username='$username' AND userpassword='$userpassword'";
  //5. Execute SQL syntax
  $sql=mysql_query($sqlsyntax,$GLOBALS["connect"])or die(mysql_error());
  //6. Contain results in an array variable
  $login=mysql_fetch_array($sql); print_r($login);
  var_dump(empty($login));
  //7. Check if executing query yields results
  if (!empty($login)) {
	  //If executing query yields results
	  //Create a session
	  $_SESSION["username"]=$username;
	  header("location:admin.php");
  }
  else {
	  //If executing query yields no results
	  //Show error message
	  header("location:index.php?loginerror");
  }
?>