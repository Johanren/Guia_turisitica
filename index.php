<?php  

//controllers
require_once 'controllers/controladorViews.php';
//Modelo
require_once 'Models/conexion.php';
require_once 'Models/modeloViews.php';
require_once 'Models/modeloMapa.php';
//fpdf


$views = new controladorViews();
$views->cargarTemplate();

?>