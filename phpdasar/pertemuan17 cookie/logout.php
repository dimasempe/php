<?php 
session_start();
$_SESSON = [];
session_unset();
session_destroy();
setcookie('nganu','',time()-3600);
setcookie('apake','',time()-3600);
header('Location: login.php');
exit;

?>