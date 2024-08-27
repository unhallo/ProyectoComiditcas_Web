<?php include_once 'baseDatosModel.php';

function ConsultarFacturasBD($Consecutivo)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarFacturas('$Consecutivo')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarDetalleFacturasBD($IdMaestro)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarDetalleFacturas('$IdMaestro')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

?>