<?php include_once '../Model/restauranteModel.php';
      include_once 'comunController.php';

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function ConsultarRestaurantes()
    {
        $respuesta = ConsultarRestaurantesBD();

        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<tr>";
                echo "<td>" . $row["NombreRest"] . "</td>";
                echo "<td>" . $row["NombreProvincia"] . "</td>";
                echo "<td>" . $row["DireccExact"] . "</td>";
                echo "<td><img width='200' height='150' src=" . $row["Imagen"] . "></img></td>";
                echo '<td>
                        
                        <a href="actualizarRestaurantes.php?q=' . $row["IdRestaurante"] . '" class="btn btn-primary">
                            <i class="fa fa-pen"></i>
                        </a>

                     </td>';
                echo "</tr>";
            }
        }
    }

    function ConsultarRestaurantesLista()
    {
        $respuesta = ConsultarRestaurantesBD();

        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<tr>";
                echo "<td>" . $row["NombreRest"] . "</td>";
                echo "<td>" . $row["NombreProvincia"] . "</td>";
                echo "<td>" . $row["DireccExact"] . "</td>";
                echo "<td><img width='200' height='150' src=" . $row["Imagen"] . "></img></td>";
                echo "</tr>";
            }
        }
    }


    if(isset($_POST["btnRegistrarRestaurante"]))
    {
        $NombreRest = $_POST["txtNombreRest"];
        $Provincia = $_POST["selectProvincia"];
        $DireccExact = $_POST["txtDireccExact"];
        $Imagen = '/View/Images/' . $_FILES["txtImagen"]["name"];

        $origen = $_FILES["txtImagen"]["tmp_name"];
        $destino = $_SERVER['DOCUMENT_ROOT'] . '/View/Images/' . $_FILES["txtImagen"]["name"];
        copy($origen,$destino);

        RegistrarRestaurante($NombreRest,$Provincia,$DireccExact,$Imagen);
        header("location: ../View/consultarRestaurantes.php");
    }

    function ConsultarRestaurante($Consecutivo)
    {
        $respuesta = ConsultarRestauranteBD($Consecutivo);
        if($respuesta -> num_rows > 0)
        {
            return mysqli_fetch_array($respuesta);
        }
    }

    if(isset($_POST["btnActualizarRestaurante"]))
    {
        $IdRestaurante = $_POST["txtIdRestaurante"];
        $NombreRest = $_POST["txtNombreRest"];
        $Provincia = $_POST["selectProvincia"];
        $DireccExact = $_POST["txtDireccExact"];

        $Imagen = "";
        if($_FILES["txtImagen"]["name"] != "")
        {
            $Imagen = '/View/Images/' . $_FILES["txtImagen"]["name"];
        }       

        ActualizarRestaurante($IdRestaurante,$NombreRest,$Provincia,$DireccExact,$Imagen);
        header("location: ../View/consultarRestaurantes.php");
    }

?>