<?php
    
    ///Capturar valores, post captura el valor  del (formulario)
    $nombre    = $_POST["nombre"];
    $apa       = $_POST["apa"];
    $ama       = $_POST["ama"];
    $gmail     = $_POST["gmail"];
    $edad      = $_POST["edad"];
    $pais      = $_POST["pais"];
    $ciudad    = $_POST["ciudad"];
   // $si        = $_POST[""];
   // $no        = $_POST["no"];
    //$talvez    = $_POST["talvez"];
    $desc_idea = $_POST["desc_idea"];  
    $tel       = $_POST["tel"];


$checkbox=$_POST['check'];

$message = $nombre ." ".$apa." ".$ama.
    "\n ". $edad. " Tel: ".$tel.
    "\n" .$gmail."\n ".$pais."\n".$ciudad."\n Tiene Idea? : ".$checkbox. "\n". $desc_idea;

    //echo $message;

    
mail("ing.Angel_mendoza@outlook.com","Inscripción a emprendimiento",$message);

//     ///Verificacion de usuarios ya existentes o no
//     $consultaId = "SELECT gmail 
//     FROM evento_mujeres  
//     WHERE gmail = '$gmail' ";
//     ///Devuelve el objeto con l resultado, false = error, true = ejecucion

// $consultaId = mysqli_query ($conexion, $consultaId);  //query =consulta
// $consultaId = mysqli_fetch_array ($consultaId); //fetch = extrae

// if (!$consultaId)
// { //Si la consulta esta vacia, inserta nuevo 

// $sql = "INSERT INTO evento_mujeres VALUES ('','$nombre', '$apa','$ama','$gmail','$edad','$pais','$ciudad','$desc_idea','$tel','$checkbox')";

//      //Ejecutar las consultas
// if (mysqli_query($conexion, $sql)) 
// {
      
// echo " <br> Registro exitoso.";
// echo "<br> <a href='../index.php' > Ver mas eventos</a></div>";
// }
// else{ //Muestra mensajes
// echo " <br> <br>Error " . $sql . "<br>" . mysqli_error($conexion);
// }
// }
// else {
// echo"El registro de este correo ya existe.";
// echo "<br> <a href='../index.php' > Intenta de nuevo</a></div>";
// }

//     mysqli_close($conexion); // se cierra la conexion
//
 
?>
<script>
    alert("Registro exitoso!");
</script>
<style>
    a{
        position: absolute;
        padding: 10px;
        background-color: #63cffe;
        text-decoration: none;
        color: black;
        border-radius: 15px;
        cursor: pointer;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>
<a type="button" href="../events.php">
    Regresar a eventos
</a>
<?php
    
?>
