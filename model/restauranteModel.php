<?php include_once 'baseDatosModel.php';

function ConsultarRestaurantesBD()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarRestaurantes()";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function RegistrarRestaurante($NombreRest,$Provincia,$DireccExact,$Imagen)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL RegistrarRestaurante('$NombreRest','$Provincia','$DireccExact','$Imagen')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ActualizarRestaurante($IdRestaurante,$NombreRest,$Provincia,$DireccExact,$Imagen)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ActualizarRestaurante('$IdRestaurante','$NombreRest','$Provincia','$DireccExact','$Imagen')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarRestauranteBD($Consecutivo)  
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarRestaurante('$Consecutivo')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}


?>

