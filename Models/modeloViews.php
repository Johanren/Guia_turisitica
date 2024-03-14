<?php

class modeloViews
{
    function enlacePagina($enlace)
    {
        if (
            $enlace == 'inicio'
        ) {
            $modulo = 'Views/Moduls/' . $enlace . '.php';
        }
        return $modulo;

    }
}
