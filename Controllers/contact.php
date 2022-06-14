<?php
    $from = "vinculacion@andic.org.mx";
    $to = $_POST['mail'];
    $name = $_POST['name'];
    $last = $_POST['lastName'];
    $msj = $_POST['msj'];

    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $msjFull = "<!DOCTYPE html>
    <html lang='es'>
    <head>
      <title>Hay un nuevo pedido</title>
    </head>
    <style>
    body{
        background: #494949;
        color: white;

    }
</style>

    <body style='background: #494949; color:#fff; text-aling:center;'>
      <h2>Nos Contacta: &#9787; $name</h2>
        <h3>&#9993;  $to</h3>
        <h4>&#10077; $msj &#10078;</h4>
        <script src='https://kit.fontawesome.com/8bd9f5ff03.js' crossorigin='anonymous'></script>
    </body>
    </html>";


    //echo $msjFull;
    mail($from,"Contacto Web",$msjFull,$cabeceras);
    echo 1;
?>