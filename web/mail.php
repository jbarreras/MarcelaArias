<?php

if(isset($_POST['submit'])){

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href", "script");
        return str_replace($bad, "", $string);
    }

    $headers = "from: pqrs@marcelaarias.com";

    $email_message .= "Nombres: ".clean_string($_POST["name"])."\n";
    $email_message .= "Correo Electrónico: ".clean_string($_POST["email"])."\n";
    $email_message .= "Asunto: ".clean_string($_POST["message"])."\n";

    mail("jorge.e.barrera@hotmail.com", clean_string($_POST["subject"]), clean_string($email_message), $headers);

}

header('Location: https://marcelaarias.com/#contact'); exit();

?>