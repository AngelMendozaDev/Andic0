<?php
    $from = "vinculacion@andic.org.mx";
    $to = $_POST['mailV'];
    $name = $_POST['nameV'];
    $phone = $_POST['phoneV'];
    $msj = $_POST['msjV'];

    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $msjFull = "<!DOCTYPE html>
    <html lang='es'>
    <head>
      <title>Nuevo Voluntario</title>
    </head>
    <style>
    body{
        background: #494949;
        color: white;

    }
</style>

    <body style='background: #494949; color:#fff; text-aling:center;'>
      <h1>Solicitud de Voluntariado de: $name</h1>
      <h3>&#9993;  $to</h3>
      <h3>&#9742; $phone</h3>
      <h4>&#10077; $msj &#10078;</h4>
    </body>
    </html>";


    //echo $msjFull;
    mail($from,"Voluntariado",$msjFull,$cabeceras);
    echo 1;
?>