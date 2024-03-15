<?php

class modeloViews
{
    function enlacePagina($enlace)
    {
        if (
            $enlace == 'inicio' ||
            $enlace == 'frmMapa' ||
            $enlace == 'agregarUbicacion' ||
            $enlace == 'editarUbicacion'
        ) {
            $modulo = 'Views/Moduls/' . $enlace . '.php';
        } elseif ($enlace == "okAgregar") {
            $modulo = 'Views/Moduls/frmMapa.php';
        } elseif ($enlace == 'okEditar') {
            $modulo = 'Views/Moduls/frmMapa.php';
        } elseif ($enlace == 'okEliminar') {
            $modulo = 'Views/Moduls/frmMapa.php';
        }
        return $modulo;

    }
}
