<?php
class Conexion{
    public function conectar(){
		$pdo = new PDO("mysql:host=localhost;dbname=guia_turistica","root","");
		return $pdo;
	}
}
?>