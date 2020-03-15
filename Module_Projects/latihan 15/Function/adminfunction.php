<?php function head() { ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CMS Web Corporate</title>
  <link rel="stylesheet" type="text/css" href="../style/adminstyle.css" />
<?php } ?>
<?php function get_header() { ?>
  <h1>CMS Corporateweb</h1>
  <h2>Content Management System</h2>
<?php } ?>
<?php function get_menu() { ?>
<ul>
  <li><a href="admin.php?news">News</a></li>
  <li><a href="admin.php?blogs">Blogs</a></li>
  <li><a href="admin.php?comments">Comments</a></li>
  <li><a href="admin.php?members">Members</a></li>
</ul>
<?php } ?>
<?php function get_news() { ?>
  <h2>News</h2>
   <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="6%" class="tableheader">Id</td>
        <td width="16%" class="tableheader">Date</td>
        <td width="25%" class="tableheader">Image</td>
        <td width="15%" class="tableheader">Title</td>
        <td width="31%" class="tableheader">Sinopsis</td>
        <td width="7%" class="tableheader">&nbsp;</td>
      </tr>
      <?php
      
	  $sqlsyntax="SELECT * FROM news_table ORDER BY date DESC";
	  $sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
	  $news=mysql_fetch_array($sql);
	  //6. Check if executing the SQL syntax yields results
	  
	  
	  ?>
      <?php if (!empty($news)) { ?>
      <?php do { ?>
      <tr>
        <td class="tablevalue"><?php echo $news["id"] ?></td>
        <td class="tablevalue"><?php echo $news["date"] ?></td>
        <td class="tablevalue"><img src="../Images/News/<?php echo $news["image"] ?>" width="160"></td>
        <td class="tablevalue"><?php echo $news["title"] ?></td>
        <td class="tablevalue"><?php echo $news["synopsis"] ?></td>
        <td class="tablevalueright">
        <a href="admin.php?editnews&id=<?php echo $news["id"] ?>">
        <img src="../asset/b_edit.png" />
        </a>
        &nbsp;&nbsp;
        <a onclick="javascript: return confirm('Are you sure you want to delete this article?');" href="admin.php?deletenews&id=<?php echo $news["id"] ?>">
          <img src="../asset/b_drop.png" />
        </a>
        </td>
      </tr>
      <?php } while ($news=mysql_fetch_array($sql));?>
      <?php
      } 
	  else {
		  
	  }
	  ?>
      <tr>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalueright">
        <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
        <img src="../asset/b_drop.png" />
        </td>
      </tr>
   </table>
           <br />
           <a href="admin.php?addnews">+&nbsp;Add</a> 
<?php } ?>
<?php function get_blogs() { ?>
  <h2>Blogs</h2>
   <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="6%" class="tableheader">Id</td>
        <td width="16%" class="tableheader">Date</td>
        <td width="25%" class="tableheader">Image</td>
        <td width="15%" class="tableheader">Title</td>
        <td width="31%" class="tableheader">Sinopsis</td>
        <td width="7%" class="tableheader">&nbsp;</td>
      </tr>
      <tr>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalueright">
        <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
        <img src="../asset/b_drop.png" />
        </td>
      </tr>
   </table>
           <br />
           <a href="admin.php?blogsadd">+&nbsp;Add</a> 
<?php } ?>
<?php function get_comments() { ?>
  <h2>Comments</h2>
   <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="6%" class="tableheader">Id</td>
        <td width="16%" class="tableheader">Date</td>
        <td width="15%" class="tableheader">News</td>
        <td width="31%" class="tableheader">Comment</td>
        <td width="7%" class="tableheader">&nbsp;</td>
      </tr>
      <tr>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalueright">
        <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
        <img src="../asset/b_drop.png" />
        </td>
      </tr>
   </table>
           <br /> 
<?php } ?>
<?php function get_members() { ?>
  <h2>Members</h2>
   <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="6%" class="tableheader">Id</td>
        <td width="16%" class="tableheader">Date</td>
        <td width="25%" class="tableheader">Image</td>
        <td width="15%" class="tableheader">Title</td>
        <td width="31%" class="tableheader">Sinopsis</td>
        <td width="7%" class="tableheader">&nbsp;</td>
      </tr>
      <tr>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalue">&nbsp;</td>
        <td class="tablevalueright">
        <img src="../asset/b_edit.png" />            &nbsp;&nbsp;
        <img src="../asset/b_drop.png" />
        </td>
      </tr>
   </table>
           <br />
           <a href="admin.php?membersadd">+&nbsp;Add</a> 
<?php } ?>
<?php function get_footer() { ?>
Copyrights &copy; 2011 Baba Studio
<?php } ?>
<?php function get_addnewsform() { ?>
<h2>Add News</h2>
<br>
<form id="frmnewsadd" name="frmnewsadd" action="admin.php?addnewssubmit" method="post" enctype="multipart/form-data">
  <table width="500">
    <tr>
      <td>Title</td>
      <td>:</td>
      <td>
        <input type="text" size="40" name="title" id="title" value="" placeholder="Type your news title here..." required>
      </td>
    </tr> 
    <tr>
    <td>Date</td>
    <td>:</td>
    <td>
      <select id="day" name="day">
        <option value="">-Day-</option>
        <?php for($day=1;$day<=31;$day++) { ?>
        <?php
          if($day==get_currentdate("day")) {
			 $selected="selected='selected'";
		  }
		  else {
			  $selected="";
		  }
		?>
        <option value="<?php echo $day; ?>" <?php echo $selected ?>>
		  <?php echo $day; ?>
        </option>
        <?php } ?>
        </select>
      &nbsp;
      <select id="month" name="month">
        <option value="">-Month-</option>
        <?php for($month=1;$month<=12;$month++) { ?>
        <?php
          if($month==get_currentdate("month")) {
			 $selected="selected='selected'";
		  }
		  else {
			  $selected="";
		  }
		?>
        <option value="<?php echo $month; ?>" <?php echo $selected ?>>
		  <?php echo get_monthname($month); ?>
        </option>
        <?php } ?>
        </select>
        &nbsp;
        <select id="year" name="year">
        <option value="">-Year-</option>
        <?php for($year=2013;$year>=1906;$year--) { ?>
        <?php
          if($year==get_currentdate("year")) {
			 $selected="selected='selected'";
		  }
		  else {
			  $selected="";
		  }
		?>
        <option value="<?php echo $year; ?>" <?php echo $selected ?>>
		  <?php echo $year; ?>
        </option>
        <?php } ?>
        </select>
      &nbsp;&nbsp;
      <input type="text" size="5" name="hour" id="hour" placeholder="Hour" value="<?php echo get_currentdate("hours") ?>" required>
      &nbsp;:&nbsp;
      <input type="text" size="5" name="minutes" id="minutes" placeholder="Minute" value="<?php echo get_currentdate("minutes") ?>" required>
      </td>
    </tr>  
    <tr>
    <td>Image</td>
    <td>:</td>
    <td>
      <input type="file" size="40" name="image" id="image" value="">
    </td>
  </tr> 
  <tr>
    <td>Synopsis</td>
    <td>:</td>
    <td>
      <textarea id="synopsis" name="synopsis" cols="40" rows="8" placeholder="Type your synopsis here..." required></textarea>
    </td>
  </tr>    
  <tr>
    <td>Detail</td>
    <td>:</td>
    <td>
      <textarea id="detail" name="detail" cols="40" rows="8" placeholder="Type your full news here..." required></textarea>
    </td>
    </tr> 
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <input type="submit" id="newssubmit" name="newssubmit" value="INSERT NEWS">
      </td>
    </tr> 
  </table>
</form>  
<?php } ?>
<?php function get_addnewssubmit() {
  
  //3. Put results of form into variables
  $title=$_POST["title"];
  $day=$_POST["day"];
  $month=$_POST["month"];
  $year=$_POST["year"];
  $newsdate="$year-$month-$day $hour:$minutes";
  $synopsis=$_POST["synopsis"];
  $detail=$_POST["detail"];
  //3-5. Check if image upload is successful
  if($_FILES["image"]["error"]==0) {
    //If successful
	$image=$_FILES["image"]["name"];
	//Move file from temporary folder to specified folder (images/news)
	move_uploaded_file($_FILES["image"]["tmp_name"],"../Images/News/$image");
  }
  else {
    //If unsuccessful
	$image="";
  }
  $sqlsyntax="INSERT INTO news_table(title,date,image,synopsis,detail) VALUES('$title','$newsdate','$image','$synopsis','$detail')";
  //5. Execute SQL syntax
  $sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
  //6. Return to admin.php
  gotopage("admin.php?news");
}
?>
<?php function get_editnewsform() { ?>
  <?php
	
	$id=$_GET["id"];
	$sqlsyntax="SELECT * FROM news_table WHERE id=$id";
	$sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
	$edit=mysql_fetch_array($sql);
	if(!empty($edit)) {
		$title=$edit["title"];
		$date=$edit["date"];
		$yeardate=substr($date,0,4);
		$monthdate=substr($date,5,2);
		$daydate=substr($date,8,2);
		$hourdate=substr($date,11,2);
		$minutedate=substr($date,14,2);
		$image=$edit["image"];
		$synopsis=$edit["synopsis"];
		$detail=$edit["detail"];
	}
  ?>
<h2>Edit News</h2>
<br>
<form id="frmnewsedit" name="frmnewsedit" action="admin.php?editnewssubmit" method="post" enctype="multipart/form-data">
  <table width="500">
    <tr>
      <td>Title</td>
      <td>:</td>
      <td>
        <input type="text" size="40" name="title" id="title" value="<?php echo $title; ?>" placeholder="Type your news title here..." required>
      </td>
    </tr> 
    <tr>
    <td>Date</td>
    <td>:</td>
    <td>
      <select id="day" name="day">
        <option value="">-Day-</option>
        <?php
          $dayselected="";
		?>
        <?php for($day=1;$day<=31;$day++) { ?>
        <?php
		  if($day==$daydate) {
			  $dayselected="selected='selected'";
		  }
		  else {
			  $dayselected="";
		  }
		?>
        <?php
          if($day==get_currentdate("day")) {
			 $selected="selected='selected'";
		  }
		  else {
			  $selected="";
		  }
		?>
        <option value="<?php echo $day; ?>" <?php echo $selected ?><?php echo $dayselected;?>>
		  <?php echo $day; ?>
        </option>
        <?php } ?>
        </select>
      &nbsp;
      <select id="month" name="month">
        <option value="">-Month-</option>
        <?php $monthselected=""; ?>
        <?php for($month=1;$month<=12;$month++) { ?>
        <?php
		  if($month==$monthdate) {
			  $monthselected="selected='selected'";
		  }
		  else {
			  $monthselected="";
		  }
		?>
        <?php
          if($month==get_currentdate("month")) {
			 $selected="selected='selected'";
		  }
		  else {
			  $selected="";
		  }
		?>
        <option value="<?php echo $month; ?>" <?php echo $selected ?> <?php echo $monthselected ?>>
		  <?php echo get_monthname($month); ?>
        </option>
        <?php } ?>
        </select>
        &nbsp;
        <select id="year" name="year">
        <option value="">-Year-</option>
        <?php $yearselected=""; ?>
        <?php for($year=2013;$year>=1906;$year--) { ?>
        <?php
		  if($year==$yeardate) {
			  $yearselected="selected='selected'";
		  }
		  else {
			  $yearselected="";
		  }
		?>
        <?php
          if($year==get_currentdate("year")) {
			 $selected="selected='selected'";
		  }
		  else {
			  $selected="";
		  }
		?>
        <option value="<?php echo $year; ?>" <?php echo $selected ?>>
		  <?php echo $year; ?>
        </option>
        <?php } ?>
        </select>
      &nbsp;&nbsp;
      <input type="text" size="5" name="hour" id="hour" placeholder="Hour" value="<?php echo $hourdate ?>" required>
      &nbsp;:&nbsp;
      <input type="text" size="5" name="minutes" id="minutes" placeholder="Minute" value="<?php echo $minutedate ?>" required>
      </td>
    </tr>  
    <tr>
    <td>Image</td>
    <td>:</td>
    <td>
    <img src="../Images/News/<?php echo $image ?>" width="200">
    <input type="hidden" id="oldimage" name="oldimage" value="<?php echo $image ?>">
      <input type="file" size="40" name="image" id="image" value="">
    </td>
  </tr> 
  <tr>
    <td>Synopsis</td>
    <td>:</td>
    <td>
      <textarea id="synopsis" name="synopsis" cols="40" rows="8" placeholder="Type your synopsis here..." required><?php echo $synopsis?></textarea>
    </td>
  </tr>    
  <tr>
    <td>Detail</td>
    <td>:</td>
    <td>
      <textarea id="detail" name="detail" cols="40" rows="8" placeholder="Type your full news here..." required><?php echo $detail?></textarea>
    </td>
    </tr> 
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
      	<input type="hidden" id="id" name="id" value="<?php echo $id ?>">
        <input type="submit" id="newssubmit" name="newssubmit" value="UPDATE NEWS">
      </td>
    </tr> 
  </table>
</form>  
<?php } ?>
<?php function get_editnewssubmit() {
  
  //3. Put results of form into variables
  $title=$_POST["title"];
  $day=$_POST["day"];
  $month=$_POST["month"];
  $year=$_POST["year"];
  $newsdate="$year-$month-$day $hour:$minutes";
  $synopsis=$_POST["synopsis"];
  $detail=$_POST["detail"];
  $id=$_POST["id"];
  $oldimage=$_POST["oldimage"];
  //3-5. Check if image upload is successful
  if($_FILES["image"]["error"]==0) {
    //If successful
	$image=$_FILES["image"]["name"];
	//Move file from temporary folder to specified folder (images/news)
	move_uploaded_file($_FILES["image"]["tmp_name"],"../Images/News/$image");
  }
  else {
    //If unsuccessful
	if($oldimage!="") {
		$image=$oldimage;
	}
	else {
		$image="";
	}
  }
  $sqlsyntax="UPDATE news_table SET
  title='$title',
  date='$newsdate',
  image='$image',
  synopsis='$synopsis',
  detail='$detail' 
  WHERE id=$id";
  //5. Execute SQL syntax
  $sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
  //6. Return to admin.php
  gotopage("admin.php?news");
}
?>
<?php
function get_deletenews() {
	
	//3. Check if news has an image
	$id=$_GET["id"];
	$sqlsyntax="SELECT image FROM news_table WHERE id=$id";
	//4. Execute SQL syntax
	$sql=mysql_query($sqlsyntax,$GLOBALS["connect"]);
	//5. Put query results into an array
	$img=mysql_fetch_array($sql);
	if(!empty($img)) {
		$imgpath="../Images/News/" . $img["image"];
		if(file_exists($imgpath)) {
			unlink($imgpath);
		}
	}
	$newssyntax="DELETE FROM news_table WHERE id=$id";
	mysql_query($newssyntax,$GLOBALS["connect"]);
	gotopage("admin.php?news");
}
?>