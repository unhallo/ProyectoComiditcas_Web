<?php include_once '../Model/mensajeModel.php';
      include_once 'comunController.php';

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function ConsultarMensajes()
    {
        $respuesta = ConsultarMensajesBD();

        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<tr>";
                echo "<td>" . $row["Fecha"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Apellidos"] . "</td>";
                echo "<td>" . $row["Mensaje"] . "</td>";
                echo '<td>
                        
                        <a href="actualizarMensajes.php?q=' . $row["IdMensaje"] . '" class="btn btn-primary">
                            <i class="fa fa-pen"></i>
                        </a>

                     </td>';
                echo "</tr>";
            }
        }
    }

    function ConsultarMensajesLista()
    {
        $respuesta = ConsultarMensajesBD();

        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<tr>";
                echo "<td>" . $row["Fecha"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Apellidos"] . "</td>";
                echo "<td>" . $row["Mensaje"] . "</td>";
                echo "</tr>";
            }
        }
    }

    if(isset($_POST["btnRegistrarMensaje"]))
    {
        $Nombre = $_POST["txtNombre"];
        $Apellidos = $_POST["Apellidos"];
        $Mensaje = $_POST["txtMensaje"];
       
        RegistrarMensaje($Nombre,$Apellidos,$Mensaje);
        header("location: ../View/consultarMensajes.php");
    }


    function ConsultarMensaje($Consecutivo)
    {
        $respuesta = ConsultarMensajeBD($Consecutivo);
        if($respuesta -> num_rows > 0)
        {
            return mysqli_fetch_array($respuesta);
        }
    }

    if(isset($_POST["btnActualizarMensaje"]))
    {
        $Consecutivo = $_POST["txtConsecutivo"];
        $Nombre = $_POST["txtNombre"];
        $Apellidos = $_POST["txtApellidos"];
        $Mensaje = $_POST["txtMensaje"];
      

        ActualizarMensaje($Consecutivo,$Nombre,$Apellidos,$Mensaje);
        header("location: ../View/consultarMensajes.php");
    }

?>