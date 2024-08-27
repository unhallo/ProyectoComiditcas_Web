<?php include_once '../Model/carritoModel.php';
      include_once 'comunController.php';

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST["RegistrarCarrito"]))
    {
        $IdProducto = $_POST["IdSouvenir"];
        $Cantidad = $_POST["Cantidad"];

        RegistrarCarrito($_SESSION["ConsecutivoUsuario"], $IdSouvenir, $Cantidad);
        echo "Souvenir añadido correctamente al carrito";
    }

    if(isset($_POST["btnPagarCarrito"]))
    {
        $respuesta = PagarCarrito($_SESSION["ConsecutivoUsuario"]);
        header("location: ../View/home.php");
    }

    function ConsultarResumenCarrito()
    {
        $respuesta = ConsultarResumenCarritoBD($_SESSION["ConsecutivoUsuario"]);
        $row = mysqli_fetch_array($respuesta);

        $_SESSION["Cantidad"] = $row["Cantidad"];
        $_SESSION["SubTotal"] = $row["SubTotal"];
        $_SESSION["Total"] = $row["Total"];
    }

    function ConsultarCarrito()
    {
        $respuesta = ConsultarCarritoBD($_SESSION["ConsecutivoUsuario"]);
       
        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<tr>";
                echo "<td>" . $row["IdSouvenir"] . " - " . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Cantidad"] . "</td>";
                echo "<td>" . number_format($row["Precio"],2) . "</td>";                
                echo "<td>" . number_format($row["SubTotal"],2) . "</td>";
                echo "<td>" . number_format($row["Impuesto"],2) . "</td>";
                echo "<td>" . number_format($row["Total"],2) . "</td>";
                echo '<td>                        
                        <a href="" class="btn btn-primary">
                           <i class="fa fa-trash"></i>
                        </a>
                     </td>';
                echo "</tr>";
            }
        }

    }

?>