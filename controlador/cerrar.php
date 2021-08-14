<?php session_start();
print "todo bien";
session_destroy();
$_SESSION = array();

header('Location: http://localhost/SaludYbelleza1/vistas/login.php');
die();

?>