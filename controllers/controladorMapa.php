<?php

class ControladorMapa
{
    function agregarUbicacionMapa()
    {
        if (isset($_POST['agregar'])) {
            $datos = array(
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['desc'],
                'telefono' => $_POST['tel'],
                'lat' => $_POST['lat'],
                'lon' => $_POST['long'],
                'con' => 1
            );

            $agregar = new ModeloMapa();
            $res = $agregar->agregarUbicacionMapaModelo($datos);
            if ($res == true) {
                echo '<script>window.location="okAgregar"</script>';
            }
        }elseif (isset($_POST['editar'])) {
            $datos = array(
                'id' => $_GET['idMapa'],
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['desc'],
                'telefono' => $_POST['tel'],
                'lat' => $_POST['lat'],
                'lon' => $_POST['long'],
                'con' => 1
            );
            $editar = new ModeloMapa();
            $res = $editar->EditarUbicacionMapaModelo($datos);
            if ($res == true) {
                echo '<script>window.location="okEditar"</script>';
            }
        }
    }

    function consultarUbicacion(){
        if (isset($_GET['idMapa'])) {
            $id = $_GET['idMapa'];
            $listar = new ModeloMapa();
            $res = $listar->consultarUbicacionModelo($id);
            return $res;
        }
    }

    function eliminarUbicacion(){
        if (isset($_GET['idMapa'])) {
            $id = $_GET['idMapa'];
            $listar = new ModeloMapa();
            $res = $listar->eliminarUbicacionModelo($id);
            if ($res == true) {
                echo '<script>window.location="okEliminar"</script>';
            }
        }
    }
}