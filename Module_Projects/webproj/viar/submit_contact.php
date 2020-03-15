<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Success</title>
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
</head>
<body>
<div id="wrapper">
    <div id="header">
      <!--- Start Header--->
      <!--- End Header --->
</div>
    <div id="menu">
      <!--- Start Menu --->
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?about">About Us</a></li>
        <li><a href="index.php?faq">F.A.Q.</a></li>
        <li><a href="index.php?news">News</a></li>
        <li><a href="index.php?contact">Contact Us</a></li>
      </ul>
      <!--- End Menu --->
</div>
    <div id="content">
      <p>
      <!--- Start Content --->
      <?php
if(isset($_POST['email'])) {
	
	// CHANGE THE TWO LINES BELOW
	$email_to = "nathanaelhanantoputro@gmail.com";
	
	$email_subject = "Pesan yang dikirim melalui mitraberkatlestari.com";
	
	
	function died($error) {
		// your error code can go here
		echo "Maaf, tetapi ada kesalahan dengan form yang anda kirim.<br /><br />";
		echo $error."<br /><br />";
		echo "Tolong kembali dan betulkan kesalahan anda.<br />";
		die();
	}
	
	// validation expected data exists
	if(!isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['message'])) {
		died('Maaf, tetapi ada kesalahan dengan form yang anda kirim.');		
	}
	
	$name = $_POST['name']; // required
	$email_from = $_POST['email']; // required
	$message = $_POST['message']; // required
	
	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
  	$error_message .= 'E-mail yang anda kirim sepertinya salah.<br />';
  }
	$string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
  	$error_message .= 'Nama yang anda kirim terlalu pendek.<br />';
  }
  if(strlen($message) < 2) {
  	$error_message .= 'Pesan yang anda kirim terlalu pendek.<br />';
  }
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "Detail form dibawah.\n\n";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message .= "Nama: ".clean_string($name)."\n";
	$email_message .= "E-mail: ".clean_string($email_from)."\n";
	$email_message .= "Pesan: ".clean_string($message)."\n";
	
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- place your own success html below -->

Terima kasih untuk mengirim pesan. Kami akan segera membalasnya.
<br>
<br>
<?php
}
die();
?>
      <!--- End Content --->
</div>
    <div id="footer">
      <!--- Start Footer --->
      &copy; Nathanael Hananto Putro. All Rights Reserved.
      <!--- End Footer --->
  </div>
  </div>
</body>
</html>