<?php
session_start();

session_unset();
session_destroy();

$_SESSION['errmsg'] = "You have successfully logged out";
$extra = "index.php";
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("location: http://$host$uri/$extra");
exit();
?>
