<?php

require_once "conexion.php";
class ModeloMapa{
    public $tabla = "mapa";

    function listarMapa(){
        $sql = "SELECT * FROM $this->tabla";
        try {
            $conn = new Conexion();
            $stms = $conn->conectar()->prepare($sql);
            if ($stms->execute()) {
                return $stms->fetchAll();
            } else {
                return [];
            }
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
    }
}