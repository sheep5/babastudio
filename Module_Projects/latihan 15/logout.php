<?php
ob_start();
session_start();
ob_end_clean();

//Delete a session
session_destroy();
//Return to index.php
header("location:index.php")
?>