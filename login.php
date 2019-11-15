<?php 
$e = $_POST["e"];
$e2 = $_POST["e2"];
$pw = $_POST["pw"];
$us = $_POST["us"];
session_start();
$_SESSION["e"] = $e;
$_SESSION["e2"] = $e2;
$_SESSION["pw"] = $pw;
$_SESSION["us"] = $us;
print "  &nbsp;<script>window.location = 'login/';</script>";
?>
