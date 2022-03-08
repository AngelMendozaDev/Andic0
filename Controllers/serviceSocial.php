<?php
    $to = "lumegamx1516@gmail.com";
    $person = strtoupper($_POST['person']);
    $school = strtoupper($_POST['school']);
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = strtoupper($_POST['message']);

    $msgbox = "El C. \"". $person . "\" perteneciente a la institucion: \"" . $school.
                "\" solicita realizar su Servicio Social en ANDIC, deja como formas de contacto: \n \n".
                $phone ."\n".$mail. "\n \n" . $message;

    // mail($to,"SOLICITUD SERVICIO SOCIAL",$msgbox);
    echo 1;
?>