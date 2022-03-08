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

        public function existUser($mail){
            $conexion =conector::getConexion();

            $sql ="SELECT mail FROM heroes where mail = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('s',$mail);
            $query->execute();

            $data = $query->get_result()->fetch_array();
            if(count($data) > 0){
                return 1;
            }

            return 0;
        }

        public function newUser($data){
            $conexion = conector::getConexion();

            if(self::existUser($data['mail']) != 1){
                $sql = "INSERT INTO heroes (nombres,app,apm,telefono,mail) VALUES (?,?,?,?,?)";
                $query = $conexion->prepare($sql);
                $query->bind_param('sssss',$data['nombres'],$data['app'],$data['apm'],$data['telefono'],$data['mail']);
                $inserto = $query->execute();
                $query->close();
                return $inserto;
            }
            return -1;
        }
    }