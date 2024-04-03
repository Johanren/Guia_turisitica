<?php  

//controllers
require_once 'controllers/controladorViews.php';
require_once 'controllers/controladorMapa.php';
require_once 'controllers/controladorUsuario.php';
require_once 'controllers/controladorActivo.php';
require_once 'controllers/controladorRol.php';
//Modelo
require_once 'Models/conexion.php';
require_once 'Models/modeloViews.php';
require_once 'Models/modeloMapa.php';
require_once 'Models/modeloUsuario.php';
require_once 'Models/modeloActivo.php';
require_once 'Models/modeloRol.php';
//fpdf


$views = new controladorViews();
$views->cargarTemplate();

?>