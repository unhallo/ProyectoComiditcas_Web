<?php

    function AbrirBaseDatos()
    {
        return mysqli_connect('127.0.0.1:3309', 'root', '', 'db_comiditicas');
    }

    function CerrarBaseDatos($conexion)
    {
        mysqli_close($conexion);
    }

?>