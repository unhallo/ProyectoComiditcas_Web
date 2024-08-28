<?php include_once 'baseDatosModel.php';

function ConsultarMensajesBD()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarMensajes()";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function RegistrarMensaje($Nombre,$Apellidos,$Mensaje)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL RegistrarMensaje('$Nombre','$Apellidos','$Mensaje')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ActualizarMensaje($Consecutivo,$Nombre,$Apellidos,$Mensaje)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ActualizarRestaurante('$Consecutivo','$Nombre','$Apellidos','$Mensaje')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarMensajeBD($Consecutivo)  
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarMensaje('$Consecutivo')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}


?>

