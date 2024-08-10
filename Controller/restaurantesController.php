<?php include_once '../Model/gestionRestauranteModel.php';
include_once 'comunController.php';

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST["enviar_restaurante"])){ 
        $rest = insertRestaurante($_POST["menu"], $_POST["nombre"], $_POST["provincia"], $_POST["canton"], $_POST["distrito"], $_POST["dir"]);

        if($rest){ 
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un problema a la hora de crear la direccion";
        }
    }

     

    if(isset($_POST["actualizar"])){
            $valido = updateRestaurante($_POST["id"], $_POST["menu"], $_POST["nombre"]);
    
        if($valido) {
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un error a la hora de actualizar el restaurante";
        }
    }

    

    if(isset($_POST["actualizar"])){
        $valido = updateDireccion($_POST["id"], $_POST["provincia"], $_POST["canton"], $_POST["distrito"], $_POST["dir"]);

        if($valido) {
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un error a la hora de actualizar la direccion del restaurante";
        }
    }

    $restaurantes = getAllRestaurantes();

    if(isset($_GET["id"])){
        $valido = deleteRestaurante($_GET["id"]);

        if($valido) {
            header("Location: ../View/gestionRestaurante.php");
        } else {
            echo "Hubo un error a la hora de eliminar el registro";
        }
    }
        
?>