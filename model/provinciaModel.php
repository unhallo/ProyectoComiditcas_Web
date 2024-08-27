<?php include_once 'baseDatosModel.php';

function ConsultarProvinciasBD()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarProvincias()";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

?>