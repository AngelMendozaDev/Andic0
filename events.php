<?php
require_once "header.php";
require_once "Class/Conector.php";
$model = new conector();
?>
<link rel="stylesheet" href="css/estilos.css">

    <header class="my-nav">
        <div class="nav-menus">
            <div class="burger-nav">
                <input type="checkbox" id="burger-status" hidden>
                <label for="burger-status">
                    <i class="fa-solid fa-bars"> </i>
                </label>
            </div>
        </div>

    </header>

    <!--menu lateral-->

    <div class="nav-lateral" id="nav-lateral">
        <label for="burger-status" class="close-1">
            <i class="fa fa-times" aria-hidden="true"></i>
        </label>
        <h1>Eventos</h1> <br>

        <ul class="options-lateral">
            <li class="option-1"> <a href="index.php" class="boton-nav " id="recientes ">Recientes</a>
            </li>
            <li class="option-1"> <a href="Prox_Ev.php" class="boton-nav" id="prox ">Proximos</a>
            </li>
        </ul>
    </div>

    <!--resto del diseño-->

    <!-- imagen, titulo -->
    <div class="title">
        <h1> Eventos </h1>
        <img src="media/Pictures/cortada.jpeg">
        
        <br><br><br>
    </div>

    <div class="big-nav ">
        <ul class="options ">
            <li class="option ">
                <a href="index.php " class="boton " id="recientes ">Recientes</a>
            </li>
            <li class="option ">
                <a href="Prox_Ev.php " class="boton " id="prox ">Proximos</a>
            </li>
        </ul>
        <br>
    </div>
    <br><br><br>
    <hr class="linea "> <br>
    <!-- carrucel -->

    <?php

    $consulta = "SELECT * FROM evento ";
    $conexion = $model->getConexion();
    $datos = $conexion->prepare($consulta);
    $datos->execute();
    $datos = $datos->get_result();
    while ($fila = $datos->fetch_assoc()) {
    ?>
        <div class="eventos ">
            <div class="video ">
                <?php
                $data = explode("*", $fila['foto']);
                if ($data[0] == "i") {
                ?>
                    <img src="Media/Pictures/<?php echo $data[1];?>" alt="">
                <?php
                } else {
                ?>
                    <video controls>
                        <source src="videos/<?php echo $data[1]; ?> ">
                    </video>

                <?php } ?>
            </div>
            <div class="informacion ">
                <h3> <?php echo "$fila[titulo] " ?> </h3>
                <br>
                
                <h4> Descripcion del evento </h4>
                <br>
                <p> <?php
                    $data = explode("*", $fila['descript']);
                    for ($i = 0; $i < count($data); $i++) {
                        if ($i == 1) {
                            echo "<a href='" . $data[$i] . "' target='_blank'> Por motivo del 8 de Marzo, te invitamos a participar en la semana de emprendimiento para mujeres <br> <br>¡Pintate de naranaja! <br><br><br> Da click aqui para conocer el temario </a>";
                            break;
                        }
                        echo $data[$i] . "<br>";
                    }
                    ?> </p>
                <br>

                <div id="dat ">
                    <div class="datos ">
                        <ul>
                            <li>
                                <h5> Hora: <?php echo "$fila[horario] " ?> </h5>
                            </li>
                            <li>
                                <h5> Fecha: <?php echo "$fila[fecha_inicio] " ?> </h5>
                            </li>
                         <!--   <li><a href="https://goo.gl/maps/wLuHyLspqBnC5jr68 " class="btn-U "><b>Ubicación</b></a></li> -->
                        </ul>
                        
                        <br>
                        <a href="Formulario.php " class="btn " id="registrate "> Registrar</a> <br>
                    </div>
                </div>
            </div>
        </div>
       
    <?php
    }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>


    <!--Script-->
    <script src="../Eventos/libs/jQuery.js ">
    </script>
    <script src="js/burgerNav.js ">
    </script>

</body>

</html>