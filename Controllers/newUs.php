<?php
    require_once "../Class/General.php";
    $class = new general();
    $insertData = [
        "nombres" => strtoupper($_POST['Name']),
        "app" => strtoupper($_POST['App']),
        "apm" => strtoupper($_POST['Apm']),
        "telefono" => $_POST['Phone'],
        "mail" => $_POST['Mail']
    ];

    echo $class->newUser($insertData);
?>