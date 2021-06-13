<?php 

$to = "nikos.michalakis@hotmail.nl";
$subject = "My subject";
$txt = "Hello world!";
mail($to,$subject,$txt);

/* Cofiguration problem
Warning: mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\index_3.php\mail_3.php on line 6
*/




?>