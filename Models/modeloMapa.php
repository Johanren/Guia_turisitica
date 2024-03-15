<?php

require_once "conexion.php";
class ModeloMapa
{
    public $tabla = "mapa";

    function listarMapa()
    {
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

    function agregarUbicacionMapaModelo($dato)
    {
        $sql = "INSERT INTO $this->tabla (persona, descripcion, edad, lat, lng, condicion) VALUES (?,?,?,?,?,?)";
        $conn = new Conexion();
        $stms = $conn->conectar()->prepare($sql);
        if ($dato != '') {
            $stms->bindParam(1, $dato['nombre'], PDO::PARAM_STR);
            $stms->bindParam(2, $dato['descripcion'], PDO::PARAM_STR);
            $stms->bindParam(3, $dato['telefono'], PDO::PARAM_STR);
            $stms->bindParam(4, $dato['lat'], PDO::PARAM_STR);
            $stms->bindParam(5, $dato['lon'], PDO::PARAM_STR);
            $stms->bindParam(6, $dato['con'], PDO::PARAM_INT);
        }
        try {
            if ($stms->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
    }

    function EditarUbicacionMapaModelo($dato)
    {
        $sql = "UPDATE $this->tabla SET persona=?,descripcion=?,edad=?,lat=?,lng=?,condicion=? WHERE idmapa = ?";
        $conn = new Conexion();
        $stms = $conn->conectar()->prepare($sql);
        if ($dato != '') {
            $stms->bindParam(1, $dato['nombre'], PDO::PARAM_STR);
            $stms->bindParam(2, $dato['descripcion'], PDO::PARAM_STR);
            $stms->bindParam(3, $dato['telefono'], PDO::PARAM_STR);
            $stms->bindParam(4, $dato['lat'], PDO::PARAM_STR);
            $stms->bindParam(5, $dato['lon'], PDO::PARAM_STR);
            $stms->bindParam(6, $dato['con'], PDO::PARAM_INT);
            $stms->bindParam(7, $dato['id'], PDO::PARAM_INT);
        }
        try {
            if ($stms->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
    }

    function consultarUbicacionModelo($id){
        $sql = "SELECT * FROM $this->tabla WHERE idmapa = ?";
        try {
            $conn = new Conexion();
            $stms = $conn->conectar()->prepare($sql);
            if ($id != '') {
                $stms->bindParam(1, $id, PDO::PARAM_INT);
            }
            if ($stms->execute()) {
                return $stms->fetchAll();
            } else {
                return [];
            }
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
    }

    function eliminarUbicacionModelo($id){
        $sql = "DELETE FROM $this->tabla WHERE idmapa = ?";
        try {
            $conn = new Conexion();
            $stms = $conn->conectar()->prepare($sql);
            if ($id != '') {
                $stms->bindParam(1, $id, PDO::PARAM_INT);
            }
            if ($stms->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
    }

}