<?php include_once '../Model/compraModel.php';
      include_once 'comunController.php';

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function ConsultarFacturas()
    {
        $respuesta = ConsultarFacturasBD($_SESSION["ConsecutivoUsuario"]);
       
        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<tr>";
                echo "<td>" . $row["IdMaestro"] . "</td>";
                echo "<td>" . $row["FechaFactura"] . "</td>";
                echo "<td>" . number_format($row["SubTotal"],2) . "</td>";                
                echo "<td>" . number_format($row["Impuesto"],2) . "</td>";
                echo "<td>" . number_format($row["Total"],2) . "</td>";
                echo '<td>                        
                        <a href="consultarDetalleFacturas.php?q=' . $row["IdMaestro"] . '" class="btn btn-primary">
                           <i class="fa fa-eye"></i>
                        </a>
                     </td>';
                echo "</tr>";
            }
        }
    }

    function ConsultarDetalleFacturas($IdMaestro)
    {
        $respuesta = ConsultarDetalleFacturasBD($IdMaestro);
       
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
                echo "</tr>";
            }
        }

    }

?>