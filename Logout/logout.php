<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: ../User/Home/Home_page.php");
exit;
?>