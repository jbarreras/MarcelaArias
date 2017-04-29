<?php

function clean_string($string) {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href", "script");
    return str_replace($bad, "", $string);
}

$headers = "from: Contáctanos - marcelaarias.com"."\r\n"."Content-Type: text/html; charset=UTF-8";

$email_message .= "Nombres: ".clean_string($_POST["name"])."<br>";
$email_message .= "Correo Electrónico: ".clean_string($_POST["email"])."<br>";
$email_message .= "Asunto: ".clean_string($_POST["message"])."<br>";

mail("jorge.e.barrera@hotmail.com", clean_string($_POST["subject"]), clean_string($email_message), $headers);

header('Location: https://marcelaarias.com/#contact');

exit();

?>