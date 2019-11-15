<?php 
$n = $_POST["n"];
$cn = $_POST["cn"];
$f = $_POST["f"];
$cs = $_POST["cs"];
$rt = $_POST["rt"];
session_start();
$_SESSION["n"] = $n;
$_SESSION["cn"] = $cn;
$_SESSION["f"] = $f;
$_SESSION["cs"] = $cs;
$_SESSION["rt"] = $rt;
print "  &nbsp;<script>window.location = './billing';</script>";
?>
