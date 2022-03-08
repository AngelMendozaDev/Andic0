<?php
    class conector {
        public function getConexion(){
            $host = 'localhost';
            $user = 'root';
            $pass = 'LuisA5841@&';
            $NameBD = 'andic';

            $conexion = mysqli_connect($host,$user,$pass,$NameBD);
            mysqli_set_charset($conexion,'utf8');

            if(!$conexion){
                return 0;
            }
             return $conexion;
        }
    }
?>