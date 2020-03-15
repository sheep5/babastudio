<?php
  function head () {
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog</title>
<link rel="stylesheet" type="text/css" href="Style/style.css">
<?php
  }
?>
<?php
  function get_header () {
?>
<h1>My Blog</h1>
<h2>Everything about me...</h2>
<?php
  }
?>
<?php
  function get_menu()  {
?>
<ul>
  <li><a href="index.php?home">Home</a></li>
  <li><a href="index.php?about">About Me</a></li>
  <li><a href="index.php?blogs">Blogs</a></li>
  <li><a href="index.php?contact">Contact Me</a></li>
</ul>
<?php
  }
?>
<?php
  function get_home()  {
?>
<h1>Welcome!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida tellus eget urna aliquam porta. In luctus molestie cursus. Proin et varius nisi. Nullam bibendum ultricies sem, ac lacinia diam rutrum eget. Donec a metus lacus. Suspendisse pharetra sem et velit pretium consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent ac dui enim, eget vestibulum velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean velit est, egestas sit amet vulputate et, eleifend non tellus. Vestibulum non fermentum neque. </p>
      <h2>News</h2>
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
		$sqlsyntax="SELECT * FROM news_table LIMIT $initial_data,$data_count";
		//7. Execute SQL Syntax
		$sqlnews=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//8. Insert query results into an array variable
		$news=mysql_fetch_array($sqlnews);
		//9. Show data with looping
	  ?>
      <?php do { ?>
      <!--- Start Looping Data --->
      <div class="newsitem">
        <h3 class="newsdate"><?php echo indonesiandate($news["date"])?></h3>
        <h3 class="newstitle"><?php echo $news["title"] ?></h3>
        <p class="newsparagraph">
          <img src="Images/News/<?php echo $news["image"] ?>"><?php echo $news["synopsis"] ?>
        </p>
          <a href="index.php?newsdetail&id=<?php echo $news["id"]; ?>">Detail &nbsp; &gt; &gt;</a>
      </div>
      <!--- End Looping Data --->
      <?php } while($news=mysql_fetch_array($sqlnews));?>
     <?php
	  //10. Specify the actual amount of data
	  $sqlsyntax2="SELECT * FROM news_table";
	  $total=mysql_query($sqlsyntax2,$GLOBALS["connect"]);
	  $total_data=mysql_num_rows($total);
	  //10. How many pages were obtained?
	  $total_page=ceil($total_data/$data_count);
	  //12. Show page links with looping
	 ?>
     <?php for($i=1;$i<=$total_page;$i++) { ?>
       <a href="index.php?home&page=<?php echo $i ?>">
       <?php echo $i ?>
       </a> &nbsp; | &nbsp;
     <?php } ?>
<?php
  }
?>
<?php
  function get_about()  {
?>
<h1>About Me</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida tellus eget urna aliquam porta. In luctus molestie cursus. Proin et varius nisi. Nullam bibendum ultricies sem, ac lacinia diam rutrum eget. Donec a metus lacus. Suspendisse pharetra sem et velit pretium consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent ac dui enim, eget vestibulum velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean velit est, egestas sit amet vulputate et, eleifend non tellus. Vestibulum non fermentum neque. </p>
      <p>Donec aliquam orci a nisl accumsan accumsan. Aliquam erat volutpat. Quisque eu nisl eu sapien pretium aliquet. Vivamus suscipit nulla ut sapien ultricies egestas posuere arcu feugiat. In hac habitasse platea dictumst. Phasellus suscipit laoreet massa, vel auctor purus fringilla nec. Donec arcu mauris, condimentum ac porttitor ac, imperdiet nec est. Suspendisse velit urna, aliquam nec interdum ac, pellentesque vehicula nulla. </p>
      <p>Aliquam pharetra erat sed metus posuere id porttitor leo lobortis. Suspendisse sagittis varius pretium. Donec euismod dui id velit dictum facilisis imperdiet nunc aliquam. Quisque nec mi ante. Morbi erat ipsum, commodo non auctor sit amet, aliquam at augue. Mauris eu odio nec eros porta tempor vel id magna. Donec accumsan placerat pellentesque. Etiam non vulputate turpis. Integer malesuada, nisi ac convallis pretium, eros mi laoreet enim, at condimentum metus lacus sed velit. Vestibulum venenatis urna non ligula consectetur commodo tincidunt nisi sodales. Nulla facilisi. Maecenas nec urna at eros eleifend commodo non non tortor. Aliquam erat volutpat. Aenean commodo tincidunt nunc, quis auctor nisl egestas eu. Nunc metus lacus, viverra eu tincidunt sit amet, pellentesque at ligula. Vivamus posuere est et mauris mollis in eleifend nulla sodales. </p>
      <p>Sed tempor nisl id est adipiscing lobortis. Pellentesque pharetra erat quis nulla consequat condimentum. Donec eget quam leo. Donec a adipiscing justo. Nulla tincidunt fringilla enim et pellentesque. Vestibulum eu nulla vel leo mattis varius porttitor viverra massa. Aenean vitae velit at mauris iaculis consectetur nec ut tellus. </p>
      <p>Sed molestie, lorem vel dignissim consequat, sapien mi tempor purus, fringilla vehicula urna velit ut est. Phasellus vestibulum gravida tellus, nec porttitor nunc porttitor sit amet. Proin sed lacus et ligula mattis pulvinar. Integer congue velit facilisis lectus laoreet porta. Nullam vel libero massa. Donec vel libero quis massa hendrerit lobortis. Nunc magna nunc, vulputate id interdum nec, posuere adipiscing arcu. Aenean id est nisi, eget congue felis. Duis at gravida dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec enim nec dolor mollis vulputate et nec leo. Aenean aliquet vestibulum urna eu accumsan. Sed erat nisl, bibendum id fermentum et, bibendum vel velit. Nam libero felis, faucibus et dictum eget, sollicitudin ac lectus. Praesent scelerisque porta lectus vitae feugiat. </p>
<?php
  }
?>
<?php
  function get_blogs()  {
?>
<h1>Blogs</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida tellus eget urna aliquam porta. In luctus molestie cursus. Proin et varius nisi. Nullam bibendum ultricies sem, ac lacinia diam rutrum eget. Donec a metus lacus. Suspendisse pharetra sem et velit pretium consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent ac dui enim, eget vestibulum velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean velit est, egestas sit amet vulputate et, eleifend non tellus. Vestibulum non fermentum neque. </p>
      <p>Donec aliquam orci a nisl accumsan accumsan. Aliquam erat volutpat. Quisque eu nisl eu sapien pretium aliquet. Vivamus suscipit nulla ut sapien ultricies egestas posuere arcu feugiat. In hac habitasse platea dictumst. Phasellus suscipit laoreet massa, vel auctor purus fringilla nec. Donec arcu mauris, condimentum ac porttitor ac, imperdiet nec est. Suspendisse velit urna, aliquam nec interdum ac, pellentesque vehicula nulla. </p>
      <p>Aliquam pharetra erat sed metus posuere id porttitor leo lobortis. Suspendisse sagittis varius pretium. Donec euismod dui id velit dictum facilisis imperdiet nunc aliquam. Quisque nec mi ante. Morbi erat ipsum, commodo non auctor sit amet, aliquam at augue. Mauris eu odio nec eros porta tempor vel id magna. Donec accumsan placerat pellentesque. Etiam non vulputate turpis. Integer malesuada, nisi ac convallis pretium, eros mi laoreet enim, at condimentum metus lacus sed velit. Vestibulum venenatis urna non ligula consectetur commodo tincidunt nisi sodales. Nulla facilisi. Maecenas nec urna at eros eleifend commodo non non tortor. Aliquam erat volutpat. Aenean commodo tincidunt nunc, quis auctor nisl egestas eu. Nunc metus lacus, viverra eu tincidunt sit amet, pellentesque at ligula. Vivamus posuere est et mauris mollis in eleifend nulla sodales. </p>
      <p>Sed tempor nisl id est adipiscing lobortis. Pellentesque pharetra erat quis nulla consequat condimentum. Donec eget quam leo. Donec a adipiscing justo. Nulla tincidunt fringilla enim et pellentesque. Vestibulum eu nulla vel leo mattis varius porttitor viverra massa. Aenean vitae velit at mauris iaculis consectetur nec ut tellus. </p>
      <p>Sed molestie, lorem vel dignissim consequat, sapien mi tempor purus, fringilla vehicula urna velit ut est. Phasellus vestibulum gravida tellus, nec porttitor nunc porttitor sit amet. Proin sed lacus et ligula mattis pulvinar. Integer congue velit facilisis lectus laoreet porta. Nullam vel libero massa. Donec vel libero quis massa hendrerit lobortis. Nunc magna nunc, vulputate id interdum nec, posuere adipiscing arcu. Aenean id est nisi, eget congue felis. Duis at gravida dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec enim nec dolor mollis vulputate et nec leo. Aenean aliquet vestibulum urna eu accumsan. Sed erat nisl, bibendum id fermentum et, bibendum vel velit. Nam libero felis, faucibus et dictum eget, sollicitudin ac lectus. Praesent scelerisque porta lectus vitae feugiat. </p>
<?php
  }
?>
<?php
  function get_contact()  {
?>
<h1>Contact Me</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida tellus eget urna aliquam porta. In luctus molestie cursus. Proin et varius nisi. Nullam bibendum ultricies sem, ac lacinia diam rutrum eget. Donec a metus lacus. Suspendisse pharetra sem et velit pretium consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent ac dui enim, eget vestibulum velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean velit est, egestas sit amet vulputate et, eleifend non tellus. Vestibulum non fermentum neque. </p>
      <p>Donec aliquam orci a nisl accumsan accumsan. Aliquam erat volutpat. Quisque eu nisl eu sapien pretium aliquet. Vivamus suscipit nulla ut sapien ultricies egestas posuere arcu feugiat. In hac habitasse platea dictumst. Phasellus suscipit laoreet massa, vel auctor purus fringilla nec. Donec arcu mauris, condimentum ac porttitor ac, imperdiet nec est. Suspendisse velit urna, aliquam nec interdum ac, pellentesque vehicula nulla. </p>
      <p>Aliquam pharetra erat sed metus posuere id porttitor leo lobortis. Suspendisse sagittis varius pretium. Donec euismod dui id velit dictum facilisis imperdiet nunc aliquam. Quisque nec mi ante. Morbi erat ipsum, commodo non auctor sit amet, aliquam at augue. Mauris eu odio nec eros porta tempor vel id magna. Donec accumsan placerat pellentesque. Etiam non vulputate turpis. Integer malesuada, nisi ac convallis pretium, eros mi laoreet enim, at condimentum metus lacus sed velit. Vestibulum venenatis urna non ligula consectetur commodo tincidunt nisi sodales. Nulla facilisi. Maecenas nec urna at eros eleifend commodo non non tortor. Aliquam erat volutpat. Aenean commodo tincidunt nunc, quis auctor nisl egestas eu. Nunc metus lacus, viverra eu tincidunt sit amet, pellentesque at ligula. Vivamus posuere est et mauris mollis in eleifend nulla sodales. </p>
      <p>Sed tempor nisl id est adipiscing lobortis. Pellentesque pharetra erat quis nulla consequat condimentum. Donec eget quam leo. Donec a adipiscing justo. Nulla tincidunt fringilla enim et pellentesque. Vestibulum eu nulla vel leo mattis varius porttitor viverra massa. Aenean vitae velit at mauris iaculis consectetur nec ut tellus. </p>
      <p>Sed molestie, lorem vel dignissim consequat, sapien mi tempor purus, fringilla vehicula urna velit ut est. Phasellus vestibulum gravida tellus, nec porttitor nunc porttitor sit amet. Proin sed lacus et ligula mattis pulvinar. Integer congue velit facilisis lectus laoreet porta. Nullam vel libero massa. Donec vel libero quis massa hendrerit lobortis. Nunc magna nunc, vulputate id interdum nec, posuere adipiscing arcu. Aenean id est nisi, eget congue felis. Duis at gravida dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec enim nec dolor mollis vulputate et nec leo. Aenean aliquet vestibulum urna eu accumsan. Sed erat nisl, bibendum id fermentum et, bibendum vel velit. Nam libero felis, faucibus et dictum eget, sollicitudin ac lectus. Praesent scelerisque porta lectus vitae feugiat. </p>
<?php
  }
?>
<?php
  function get_footer()  {
?>
&copy; Nathanael Hananto Putro 2013. All Rights Reserved.
<?php
  }
?>
<?php function get_newsdetail() { ?>
  <?php
		//3. Contain an URL parameter
		$id=$_GET["id"];
		//4. Make a SQL syntax
		$sqlsyntax="SELECT * FROM news_table WHERE id=$id";
		//5. Execute SQL syntax
		$sqlnews=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//6. Insert query results into an array variable
		$news=mysql_fetch_array($sqlnews);
	  ?>
  <h2 class="newsdate">
    <?php 
	echo indonesiandate($news["date"]);
    ?>
  </h2>
  <h3 class="newstitle">
   <?php 
	echo $news["title"];
    ?>
  </h3>
  <p class="newsdetail">
    <img src="Images/News/<?php echo str_replace(chr(13),"<br>",$news["image"]); ?>"><?php echo $news["detail"]; ?>
  </p>
  <?php get_newscomments($id); ?>
  <br><br>
  <?php
    //Check if session exists
    if (isset($_SESSION["membername"])) {
      get_newscommentform($id);
	}
	else {
		//If doesn't exist
		echo "<span style='color:#F00'>If you want to comment on this article, please <a href='login.php'>login</a> first; if you don't have an account, please <a href='index.php?registrationform'>register</a> first.</span>";
	}
  ?>
<?php } ?>

<?php function get_searchresult() {?>
<?php
		
		//3. Contain an URL parameter
		$searchtext=$_POST["searchtext"];
		//4. Make a SQL syntax
		$sqlsyntax="SELECT * FROM news_table WHERE title LIKE '%$searchtext%'";
		//5. Execute SQL syntax
		$sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//6. Insert query results into an array variable
		$sqlsearch=mysql_fetch_array($sql);
		?>
        <h2>Showing results for "<?php echo $searchtext?>"</h2>
        <?php
		  //Check if data exists
		  //If data exists
		  if(!empty($sqlsearch)) {
        ?>
        <?php do { ?>
          <!--- Start Looping --->
          <div class="newsitem">
            <h2 class="newsdate">
			  <?php echo $sqlsearch["date"]; ?>
            </h2>
            <h3 class="newstitle">
              <?php echo $sqlsearch["title"]; ?>
            </h3>
            <p class="newsparagraph">
              <img src="Images/News/<?php echo $sqlsearch["image"]; ?>">
              <?php echo $sqlsearch["synopsis"]; ?>
            </p>
              <a href="index.php?newsdetail&id=<?php echo $sqlsearch["id"]; ?>">Detail &nbsp; &gt; &gt;</a>
          </div>
        <!--- End Looping --->
        <?php
		}
		while($sqlsearch=mysql_fetch_array($sql));
		?>
        <?php
		  }
		  else {
			  //If data doesn't exist
			  echo "No data is found containing the word(s) '$searchtext'";
		  }
        ?>
<?php } ?>

<?php function get_newscomments($newsid) { ?>
  <h2>Comments</h2>
    <?php
        
		//3. Make a SQL syntax
		$sqlsyntax="SELECT * FROM newscomments_table WHERE newsid=$newsid";
		//4. Execute SQL syntax
		$sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
		//5. Insert query results into an array variable
		$sqlcomments=mysql_fetch_array($sql);
	?>
    <?php
      //6. Check if executing SQL syntax produces results
	  if (!empty($sqlcomments)) {
		  do {
	?>
      <!--- Start Looping --->
        <div class="newsitem">
          <h2 class="newsdate"><?php echo $sqlcomments["date"];?></h2>
          <h3 class="newstitle"><?php echo $sqlcomments["sender"];?></h3>
          <p class="newsparagraph">
            <?php echo $sqlcomments["comment"];?>
          </p>
        </div>
      <!--- End Looping --->
    <?php
		  } while($sqlcomments=mysql_fetch_array($sql));
	  } else {
		  echo "Sorry, we have no comments for this news yet...";
	  }
	?>
<?php } ?>

<?php function get_newscommentform($newsid) {?>
  <p>
  Comment on this article...
  </p>
  <script type="text/javascript" language="javascript">
    function checkbeforesubmit() {
		//Make variable in javascript
		var theform;
		  theform=document.getElementById("commentform");
		  
		var yourcomment;
		yourcomment=theform.comment.value;
		
		if (yourcomment=="" || yourcomment.length==0) {
			alert ("Please insert your comment!");
			theform.comment.focus();
			return false;
		}
		theform.submit();
		return true;
	}
  </script>
  <form id="commentform" name="commentform" method="post" action="index.php?commentsubmit" onsubmit="return checkbeforesubmit();">
  <table width="500px" cellspacing="5px" cellpadding="3px" border="0">
    <tr>
      <td width="100"><strong>E-mail</strong></td>
      <td width="5">:</td>
      <td width="395">
        <input type="text" class="commenttextfield" id="sender" name="sender" placeholder="Your e-mail here..." required>
        <input type="hidden" id="newsid" name="newsid" value="<?php echo $newsid; ?>">
      </td>
    </tr>
    <tr>
      <td width="100"><strong>Comment</strong></td>
      <td width="5">:</td>
      <td width="395">
        <textarea id="comment" name="comment" class="commenttextarea" placeholder="Your comment here..." required></textarea>
      </td>
    </tr>
    <tr>
      <td width="100">&nbsp;</td>
      <td width="5">&nbsp;</td>
      <td width="395">
        <input type="submit" class="submitcommentbutton" id="submitcomment" name="submitcomment" value="Send">
      </td>
    </tr>
  </table>
  </form>

<?php } ?>
<?php function get_commentsubmit() {
	    
		
		//3. Define variables
		$sender=$_POST["sender"];
		$newsid=$_POST["newsid"];
		$comment=$_POST["comment"];
		
		//4. Make SQL syntax
		$sqlsyntax="INSERT INTO newscomments_table(sender,newsid,comment,date) VALUES('$sender',$newsid,'$comment',now())";
		
		//5. Execute SQL syntax
		mysql_query($sqlsyntax,$GLOBALS["connect"]);
		
		//6. Return to related news detail page
		echo "<script language='javascript'>";
		echo "window.location.href='index.php?newsdetail&id=$newsid';";
        echo "</script>";
}
?>
<?php function get_registrationform() { ?>
   <h2>Register</h2>
   <br>
   <form id="registrationform" name="registrationform" method="post" action="index.php?register">
     <table width="500" border="0" cellpadding="3" cellspacing="5">
       <tr>
         <td>E-mail</td>
         <td>:</td>
         <td>
           <input type="email" id="membername" name="membername" value="" class="commenttextfield" placeholder="youremail@email.com" required>
         </td>
       </tr>
       <tr>
         <td>Password</td>
         <td>:</td>
         <td>
           <input type="password" id="memberpassword" name="memberpassword" value="" placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;" required>
         </td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
         <td>
           <input type="submit" id="register" name="register" value="Register">
         </td>
       </tr>
     </table>
   </form>
<?php } ?>

<?php
  function get_register() {
	
	//3. Contain an URL parameter
	$membername=$_POST["membername"];
	$memberpassword=md5($_POST["memberpassword"]);
	//4. Make a SQL syntax
	$sqlsyntax="INSERT INTO member_table(membername, memberpassword, date) VALUES('$membername', '$memberpassword', now())";
	//5. Execute SQL syntax
	$sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
	//6. Return to index.php
	echo "<script language='javascript'>";
	echo "window.location.href='index.php';";
    echo "</script>";
  }
?>