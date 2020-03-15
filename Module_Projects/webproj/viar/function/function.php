<?php
  function head () {
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="Website resmi Mitra Berkat Lestari.">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
<?php
  }
?>
<?php
  function get_header () {
?>
<h1>Mitra Berkat Lestari</h1>
<br>
<h2>Reseller Resmi Viar Motor di Ciledug</h2>
<?php
  }
?>
<?php
  function get_menu()  {
?>
  <ul>
    <li><a href="index.php?home">Home</a></li>
    <li><a href="index.php?about">About Us</a></li>
    <li><a href="index.php?faq">F.A.Q.</a></li>
    <li><a href="index.php?news">News</a></li>
    <li><a href="index.php?contact">Contact Us</a></li>
  </ul>
<?php
  }
?>
<?php
  function get_home()  {
?>
<!--- Start content --->
<h1 class="content">Welcome!</h1>
     null()
<!--- End content --->
<?php
  }
?>
<?php
  function get_about()  {
?>
<p>Berdiri sejak tahun 2000, PT Triangle Motorindo sebagai Agen Tunggal Pemegang Merk VIAR didirikan dengan tekad untuk menjadi salah satu produsen sepeda motor terbesar di Indonesia. Hal ini dibuktikan dengan komitmen PT. Triangle Motorindo yang selalu memproduksi sepeda motor VIAR dengan mutu tinggi dan harga yang terjangkau kepada masyarakat Indonesia agar VIAR menjadi leading brand otomotif di Indonesia.</p>
     <p class="content">Kini, dengan pabrik luas yang berlokasi di Semarang, PT Triangle Motorindo terus mengadakan ekspansi pabrik hingga seluas 20 hektar. Saat ini PT Triangle Motorindo telah mampu memproduksi sepeda motor secara CKD (Completely Knocked-Down) dan memiliki kapasitas produksi hingga 1000 unit per hari sehingga menjadikannya sebagai salah satu pabrik otomotif terbesar di Indonesia. Dukungan berbagai vendor part otomotif terbaik di Indonesia dan luar negeri serta ketatnya Quality Control memastikan setiap produk sepeda motor VIAR merupakan produk yang bermutu tinggi.</p>
     <p class="content">Lebih dari 700 dealer sepeda motor di seluruh Indonesia telah bergabung menjadi jaringan penjualan sepeda motor VIAR. Dari segi pembiayaan, VIAR juga didukung oleh perusahaan-perusahaan leasing terbesar seperti ADIRA Dinamika Multi Finance dan Bhakti Finance. Hal ini telah mengukuhkan eksistensi PT Triangle Motorindo dan sepeda motor VIAR di dalam dunia otomotif Indonesia .</p>
<?php
  }
  ?>
<?php
function get_faq() {
?>
null()
<?php
}
?>
<?php
  function get_news()  {
?>
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
       <a href="index.php?news&page=<?php echo $i ?>">
       <?php echo $i ?>
       </a> &nbsp; | &nbsp;
     <?php } ?>
<?php
  }
?>
<?php
  function get_contact()  {
?>
<h1 align="center">Tolong jangan menyalahgunakan form ini.</h1>
      <form name="htmlform" method="post" action="submit_contact.php">
<table width="450px">
</tr>
<tr>
 <td valign="top">
  <label for="name">Nama</label>
 </td>
 <td valign="top">
  <input  type="text" name="name" maxlength="50" size="30" placeholder="Ketik nama anda disini">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">E-mail</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" placeholder="Ketik e-mail anda disini">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="message">Pesan</label>
 </td>
 <td valign="top">
  <textarea  name="message" maxlength="1000" cols="25" rows="6" placeholder="Ketik pesan anda disini"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:left">
  <input type="submit" value="Kirim">
 </td>
</tr>
</table>
</form>
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
  <?php get_newscommentform($id); ?>
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
        <h2>Menunjukkan hasil untuk pencarian kata "<?php echo $searchtext?>"</h2>
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
			  echo "Tidak ada data yang ditemukan yang mengandung kata '$searchtext'";
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
  <form id="commentform" name="commentform" method="post" action="index.php?submitcomment">
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
      <td width="100"><strong>Komentar</strong></td>
      <td width="5">:</td>
      <td width="395">
        <textarea id="comment" name="comment" class="commenttextarea" placeholder="Your comment here..." required></textarea>
      </td>
    </tr>
    <tr>
      <td width="100">&nbsp;</td>
      <td width="5">&nbsp;</td>
      <td width="395">
        <input type="submit" class="submitcommentbutton" id="submitcomment" name="submitcomment" value="Kirim">
      </td>
    </tr>
  </table>
  </form>
<?php } ?>