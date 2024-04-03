<?php

class modeloViews
{
    function enlacePagina($enlace)
    {
        if (
            $enlace == 'inicio' ||
            $enlace == 'frmMapa' ||
            $enlace == 'agregarUbicacion' ||
            $enlace == 'editarUbicacion' ||
            $enlace == 'frmIngresar' ||
            $enlace == 'usuario' ||
            $enlace == 'editarUsuario' ||
            $enlace == 'agregarUsuario' ||
            $enlace == 'salir' ||
            $enlace == 'qr'
        ) {
            $modulo = 'Views/Moduls/' . $enlace . '.php';
        } elseif ($enlace == "okAgregar") {
            $modulo = 'Views/Moduls/frmMapa.php';
        } elseif ($enlace == 'okEditar') {
            $modulo = 'Views/Moduls/frmMapa.php';
        } elseif ($enlace == 'okEliminar') {
            $modulo = 'Views/Moduls/frmMapa.php';
        } elseif ($enlace == 'loginFallido') {
            $modulo = 'Views/Moduls/frmIngresar.php';
        } elseif ($enlace == 'loginInactivo') {
            $modulo = 'Views/Moduls/frmIngresar.php';
        }elseif ($enlace == 'usuarioAgregado') {
            $modulo = 'Views/Moduls/usuario.php';
        }elseif ($enlace == 'usuarioActualizado') {
            $modulo = 'Views/Moduls/usuario.php';
        }
        return $modulo;

    }
}
