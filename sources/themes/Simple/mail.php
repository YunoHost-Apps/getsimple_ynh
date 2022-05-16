<?php 
$allowed_host = 'comuz.eu';
$host = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);

if(substr($host, 0 - strlen($allowed_host)) == $allowed_host) {
$ToEmail = 'jonne@comuz.eu'; 
$EmailSubject = '[comuz.eu] Message from website'; 
$mailheader = "From: no-reply@comuz.eu\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/plain; charset=UTF-8\r\n";
$MESSAGE_BODY = "Message from website!\n";
$MESSAGE_BODY .= "Sent ".date("d.m.Y")." at ".date("H:i:s T")."\n\n"; 
$MESSAGE_BODY .= "---------------------------------------\n\n";   
$MESSAGE_BODY .= "Message:\n".strip_tags($_POST["message"])."\n\n";   
$MESSAGE_BODY .= "---------------------------------------\n"; 
$MESSAGE_BODY .= "Name:\n".strip_tags($_POST["name"])."\n\n"; 
$MESSAGE_BODY .= "E-mail:\n".strip_tags($_POST["email"])."\n\n"; 
$MESSAGE_BODY .= "Website:\n".strip_tags($_POST["website"])."\n\n"; 
$MESSAGE_BODY .= "---------------------------------------\n\n";   
$MESSAGE_BODY .= "IP:\n".$_SERVER['REMOTE_ADDR']."\n\n"; 
$MESSAGE_BODY .= "Host:\n". gethostbyaddr($_SERVER['REMOTE_ADDR'])."\n\n"; 
$MESSAGE_BODY .= "---------------------------------------\n\n"; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
header("location: /thankyou/");
} else {
header("location: /contact/");
}?>
