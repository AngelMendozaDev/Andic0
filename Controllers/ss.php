<?php
    $from = "vinculacion@andic.org.mx";
    $to = $_POST['mail'];
    $name = $_POST['person'];
    $school = $_POST['school'];
    $phone = $_POST['phone'];
    $msj = $_POST['msj'];

    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $msjFull = "<!DOCTYPE html>
    <html lang='es'>
    <head>
      <title>Nuevo SS</title>
    </head>
    <style>
    body{
        background: #494949;
        color: white;

    }
</style>

    <body style='background: #494949; color:#fff; text-aling:center;'>
      <h1>Solicita Servicio Social $name</h1>
      <h2>proviene de la Escuela: $school</h2>
      <h3>&#9993;  $to</h3>
      <h3>&#9742; $phone</h3>
      <h4>&#10077; $msj &#10078;</h4>
    </body>
    </html>";


    //echo $msjFull;
    mail($from,"Servicio Social",$msjFull,$cabeceras);
    echo 1;
?>