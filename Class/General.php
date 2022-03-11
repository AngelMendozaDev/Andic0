<?php 
    require_once "Conector.php";

    class general extends conector{

        public function getAcciones(){
            $conexion = conector::getConexion();
            $sql = "SELECT * FROM acciones";
            $query = $conexion->prepare($sql);
            $query->execute();
            
            $data = $query->get_result();

            return $data;
        }

    }