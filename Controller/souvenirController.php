<?php include_once '../Model/souvenirModel.php';
      include_once 'comunController.php';

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function ConsultarSouvenirs()
    {
        $respuesta = ConsultarSouvenirsBD();

        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<tr>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Precio"] . "</td>";
                echo "<td>" . $row["Cantidad"] . "</td>";
                echo "<td><img width='200' height='150' src=" . $row["Imagen"] . "></img></td>";
                echo '<td>
                        
                        <a href="actualizarSouvenirs.php?q=' . $row["IdSouvenir"] . '" class="btn btn-primary">
                            <i class="fa fa-pen"></i>
                        </a>

                     </td>';
                echo "</tr>";
            }
        }
    }

    function ConsultarSouvenirsParaComprar()
    {
        $respuesta = ConsultarSouvenirsBD();

        if($respuesta -> num_rows > 0)
        {
            echo '<div class="row">';

            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo '<div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" style="background-image: url(/images/bg_3.jpg);">
                        <div style="text-align:center" >
                            <img class="card-img-top" src="'. $row["Imagen"] .'" style="width:200px; height:150px; margin-top:20px">
                        </div>
                            <div class="card-body" >
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" style="background-image: url(/images/bg_4.jpg);"><h5 class="card-title" style= "color: #fac564;" >'. $row["Nombre"] .'</h5></li>
                                      <li class="list-group-item" style="background-image: url(/images/bg_4.jpg);">Inventario: '. $row["Cantidad"] .'</li>
                                       <li class="list-group-item" style="background-image: url(/images/bg_4.jpg);">Precio: '. number_format($row["Precio"],2) .'</li>
                                </ul>
                            </div>';

                            if($row["Cantidad"] > 0)
                            {
                                echo '<div class="card-body row">
                                        <div class="col-1">
                                        </div>
                                        <div class="col-4">
                                            <input id=prd-'. $row["IdSouvenir"] .' type="number" class="form-control" style="text-align:center" 
                                            onkeypress="return SoloNumeros(event)" value="0" min="1" max='. $row["Cantidad"] .' />
                                        </div>
                                        <div class="col-6" style= "color: #fac564;">
                                            <a class="card-link btn btn-outline-primary" 
                                            onclick="AnnadirSouvenir('. $row["IdSouvenir"] .', '. $row["Cantidad"] .');">Añadir al Carrito</a>
                                        </div>
                                    </div>';
                            }
                            else
                            {
                                echo '<div class="card-body row" style="background-image: url(/images/bg_4.jpg);">
                                        <div class="col-12" style="text-align:center;color:red;font-weight:bold">
                                           <p>AGOTADO</p>
                                        </div>
                                    </div>';
                            }

                            
                    echo '</div>
                    </div>';
            }

            echo '</div>';
        }
    }

    if(isset($_POST["btnRegistrarSouvenir"]))
    {
        $Nombre = $_POST["txtNombre"];
        $Precio = $_POST["txtPrecio"];
        $Cantidad = $_POST["txtCantidad"];
        $Imagen = '/View/Images/' . $_FILES["txtImagen"]["name"];

        $origen = $_FILES["txtImagen"]["tmp_name"];
        $destino = $_SERVER['DOCUMENT_ROOT'] . '/View/Images/' . $_FILES["txtImagen"]["name"];
        copy($origen,$destino);

        RegistrarSouvenir($Nombre,$Precio,$Cantidad,$Imagen);
        header("location: ../View/consultarSouvenirs.php");
    }

    function ConsultarSouvenir($Consecutivo)
    {
        $respuesta = ConsultarSouvenirBD($Consecutivo);
        if($respuesta -> num_rows > 0)
        {
            return mysqli_fetch_array($respuesta);
        }
    }

    if(isset($_POST["btnActualizarSouvenir"]))
    {
        $IdSouvenir = $_POST["txtIdSouvenir"];
        $Nombre = $_POST["txtNombre"];
        $Precio = $_POST["txtPrecio"];

        $Imagen = "";
        if($_FILES["txtImagen"]["name"] != "")
        {
            $Imagen = '/View/Images/' . $_FILES["txtImagen"]["name"];
        }       

        ActualizarSouvenir($IdSouvenir,$Nombre,$Precio,$Cantidad,$Imagen);
        header("location: ../View/consultarSouvenirs.php");
    }

?>