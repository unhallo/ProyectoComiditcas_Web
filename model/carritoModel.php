<?php include_once 'baseDatosModel.php';

function RegistrarCarrito($Consecutivo,$IdSouvenir,$Cantidad)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL RegistrarCarrito('$Consecutivo','$IdSouvenir','$Cantidad')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarResumenCarritoBD($Consecutivo)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarResumenCarrito('$Consecutivo')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarCarritoBD($Consecutivo)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarCarrito('$Consecutivo')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function PagarCarrito($Consecutivo)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL PagarCarrito('$Consecutivo')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}


?>