<?php

function clean_string($string) {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href", "script", ">", "<");
    return str_replace($bad, "", $string);
}

$headers = "from: Solicitud Información <admin@marcelaarias.com>"."\r\n"."Content-Type: text/plain; charset=UTF-8";

$email_message .= "Nombres: ".clean_string($_POST["name"])."\r\n";
$email_message .= "Correo Electrónico: ".clean_string($_POST["email"])."\r\n";
$email_message .= "Mensaje: ".clean_string($_POST["message"])."\r\n";

mail("info@marcelaarias.com", clean_string($_POST["subject"]), clean_string($email_message), $headers);

header('Location: https://marcelaarias.com/#contact');

exit();

?>