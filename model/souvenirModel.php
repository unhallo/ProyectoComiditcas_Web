<?php include_once 'baseDatosModel.php';

function ConsultarSouvenirsBD()
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarSouvenirs()";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function RegistrarSouvenir($Nombre,$Precio,$Cantidad,$Imagen)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL RegistrarSouvenir('$Nombre','$Precio','$Cantidad','$Imagen')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ActualizarSouvenir($IdSouvenir,$Nombre,$Precio,$Cantidad,$Imagen)
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ActualizarSouvenir('$IdSouvenir','$Nombre','$Precio','$Cantidad','$Imagen')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function ConsultarSouvenirBD($Consecutivo)  
{
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ConsultarSouvenir('$Consecutivo')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}


?>

