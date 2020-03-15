<?php
  function get_head() {
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Blog</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<?php
  }
?>
<?php
function get_header() {
?>
   <h1>My Blogs</h1>
   <h2>Come & Enjoy Like Your Home</h2>
<?php
  }
?>
<?php
  function get_menu() {
?>
  <ul>
    <li>
      <a href="index.php?home">Home</a>
    </li>
    <li>
       <a href="#">Profile           </a>
    </li>
    <li>
       <a href="#">Blogs</a>
    </li>
    <li>
       <a href="index.php?gallery">Gallery</a>
     </li>
     <li>
       <a href="index.php?contact">Contact Us</a>
     </li>
  </ul>
<?php
  }
?>
<?php
  function get_leftcontent() {
?>
<div id="leftcontent">
<div class="miniwrapper">
            <div class="miniheader">
              Hot Blogs
            </div>
            <div class="minicontent">
             <h1>10 Antivirus Terbaik di Tahun 2012</h1> 
             <p>
              <img src="images/computer-virus.jpg">Jangan sampai computer atau laptop anda terkena virus jahat yang dapat merusak atau menghilangkan data-data penting anda. Pilihlah anti virus yang terbaik bagi computer dan laptop kesayangan anda. Bila anda masih bingung menentukan anti virus apa yang akan anda gunakan
             </p>
            </div>
         </div>
       <!--- End Hot Blogs --->
       <br>
       <br>
       <!--- Start Hot News --->
         <div class="miniwrapper">
            <div class="miniheader">
              Hot News
            </div>
            <div class="minicontent">
             <h1>10 Web Browser Terbaik di Dunia</h1> 
             <p>
              <img src="images/browsers-icons-280x300.png">Satu pertanyaan yang saya akan ajukan kepada pembaca sebelum anda membaca artikel ini. Apa nama Web Browser Favorit anda saat anda berinternet? 
             </p>
            </div>
         </div>
       <!--- End Hot News --->
       </div>
<?php
  }
?>
<?php
  function get_home() {
?>
<h2>Welcome</h2>
      <p>
       Do your layouts deserve better than Lorem Ipsum? Apply as an art director and team up with the best copywriters at Jung von Matt: www.jvm.com/jobs/lipsum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet, ipsum in viverra sagittis, augue ipsum mattis lorem, et sagittis magna tellus vel tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis mi diam, ac molestie erat. Suspendisse potenti. Duis a nunc in mi bibendum tincidunt. Mauris aliquet, nulla eu luctus ultrices, metus massa molestie nisi, sit amet dignissim risus massa at augue. Sed tincidunt odio vel lorem varius vehicula. Donec pharetra, nisi a eleifend viverra, ipsum felis dictum lorem, quis blandit dolor purus a magna. Integer iaculis metus non urna posuere tincidunt. Aliquam erat volutpat. 
      </p>
      
      <br>
      
      <!--- Start News --->
      <h2>News</h2>
      <!--- Start Looping News --->
      <div class="newsitem">
         <h2 class="newsdate">Tanggal</h2>
         <h3 class="newstitle">Judul</h3>
         <p class="newsparagraf">
           <img src="images/news/">isi content
         </p>
         <br>
         <a href="">detail&nbsp;&gt;&gt;</a>
       </div>
       <!--- End Looping News --->
       <!--- End News --->
      
     </div>
      <!--- End Content --->
<?php
  }
?>
<?php
  function get_gallery() {
?>
<h2>Our Gallery</h2>
      
      <div class="galleryitem">
        <div class="top">
           <a class="fancybox" href="images/gallery/image1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
           <img src="images/gallery/image1.jpg">
           </a>
        </div>
        <div class="bottom">
          image 1
        </div>
      </div>
      
      <div class="galleryitem">
        <div class="top">
           <a class="fancybox" href="images/gallery/image2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
           <img src="images/gallery/image2.jpg">
           </a>
        </div>
        <div class="bottom">
          image 2
        </div>
      </div>
      
      <div class="galleryitem">
        <div class="top">
           <a class="fancybox" href="images/gallery/image3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
           <img src="images/gallery/image3.jpg">
           </a>
        </div>
        <div class="bottom">
          image 3
        </div>
      </div>
      
      <div class="galleryitem">
        <div class="top">
           <a class="fancybox" href="images/gallery/image4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
           <img src="images/gallery/image4.jpg">
           </a>
        </div>
        <div class="bottom">
          image 4
        </div>
      </div>
      
      <div class="galleryitem">
        <div class="top">
           <a class="fancybox" href="images/gallery/image5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
           <img src="images/gallery/image5.jpg">
           </a>
        </div>
        <div class="bottom">
          image 5
        </div>
      </div>
      
     </div>
      <!--- End Content --->
<?php
  }
?>
<?php
  function get_contact() {
?>
<h2>Contact Us</h2>
      <p>
       Do your layouts deserve better than Lorem Ipsum? Apply as an art director and team up with the best copywriters at Jung von Matt: www.jvm.com/jobs/lipsum.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet, ipsum in viverra sagittis, augue ipsum mattis lorem, et sagittis magna tellus vel tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis mi diam, ac molestie erat. Suspendisse potenti. Duis a nunc in mi bibendum tincidunt.  
      </p>
      <form id="contactform" name="contactform" method="post" action="">
        <table border="0" width="100%" cellpadding="5" cellspacing="5">
          <tr>
           <td class="formlable">First Name</td>
           <td class="formseparate">:</td>
           <td>
            <input type="text" id="firstname" name="firstname" value="" class="formtextfield" maxlength="50" placeholder="Please Fill First Name" required>
           </td>
          </tr>
          <tr>
           <td class="formlable">Last Name</td>
           <td class="formseparate">:</td>
           <td>
            <input type="text" id="lastname" name="lastname" value="" class="formtextfield" maxlength="50" placeholder="Please Fill Last Name">
           </td>
          </tr>
          <tr>
           <td class="formlable">Email</td>
           <td class="formseparate">:</td>
           <td>
            <input type="email" id="email" name="email" value="" class="formtextfield" maxlength="50" placeholder="Please Fill Email" required>
           </td>
          </tr>
          <tr>
           <td class="formlable">Gender</td>
           <td class="formseparate">:</td>
           <td>
            Male<input type="radio" id="gendermale" name="gender" value="male" checked>
            &nbsp;&nbsp;&nbsp;&nbsp;
            Female<input type="radio" id="genderfemale" name="gender" value="female">
           </td>
          </tr>
          <tr>
           <td class="formlable">Birthday</td>
           <td class="formseparate">:</td>
           <td>
            <select id="day" name="day">
              <option value="">Day</option>
              <option value="1">1</option>             <option value="2">2</option>             <option value="3">3</option>             <option value="4">4</option>             <option value="5">5</option>
            </select>
            &nbsp;&nbsp;&nbsp;
            <select id="month" name="month">
              <option value="">Month</option>
              <option value="1">January</option>             <option value="2">February</option>             <option value="3">March</option>             <option value="4">April</option>             <option value="5">May</option>
            </select>
            &nbsp;&nbsp;&nbsp;
            <select id="year" name="year">
              <option value="">Year</option>
              <option value="2012">2012</option>             <option value="2011">2011</option>             <option value="2010">2010</option>             <option value="2009">2009</option>             <option value="2008">2008</option>
            </select>
           </td>
          </tr>
          <tr>
           <td class="formlable" valign="top">Message</td>
           <td class="formseparate" valign="top">:</td>
           <td>
            <textarea id="message" name="message" cols="35" rows="10">
            
            </textarea>
           </td>
          </tr>
          <tr>
           <td class="formlable">&nbsp;</td>
           <td class="formseparate">&nbsp;</td>
           <td>
            <input type="submit" id="contactsubmit" name="contactsubmit" value="Send" >
           </td>
          </tr>
        </table>
      </form>
     </div>
      <!--- End Content --->
<?php
  }
?>
<?php
  function get_footer() {
?>
<!--- Start Footer --->
      Copyrights &copy; 2012 Fransen T
      <!--- End Footer --->
<?php
  }
?>