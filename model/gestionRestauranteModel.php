<?php include_once 'baseDatosModel.php';

function RegistrarRestaurante($Cod_post, $Nombre, $Horario) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL RegistrarRestaurante('$Cod_post', '$Nombre', '$Horario')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function getAllRestaurantes() {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL Llamar_restaurantes()";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}


function ActualizarDatosRestaurante($Cod_rest, $Horario, $Nombre) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ActualizarDatosRestaurante('$Cod_rest', '$Horario', '$Nombre')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function BorrarRestaurante($Id) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL BorrarRestaurante('$Id')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function getDireccion($Id) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL Llamar_direcciones('$Id')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function insertDireccion($Provincia, $Canton, $Distrito, $Direccexact) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL RegistrarDireccion('$Provincia', '$Canton', '$Distrito', '$Direccexact')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function updateDireccion($Cod_direcc_rest, $Provincia, $Canton, $Distrito, $Direccexact) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL ActualizarDireccionRestaurante('$Cod_direcc_rest', '$Provincia', '$Canton', '$Distrito', '$Direccexact')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}

function deleteDireccion($Cod_direcc_rest) {
    $conexion = AbrirBaseDatos();
    $sentencia = "CALL sp_delete_direccion('$Cod_direcc_rest')";
    $respuesta = $conexion -> query($sentencia);
    CerrarBaseDatos($conexion);
    return $respuesta;
}
?>