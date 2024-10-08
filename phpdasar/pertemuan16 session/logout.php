<?php 
session_start();
$_SESSON = [];
session_unset();
session_destroy();
header('Location: login.php');
exit;

?>