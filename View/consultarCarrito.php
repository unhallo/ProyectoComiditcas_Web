<?php   include_once 'layoutInterno.php';
        include_once '../Controller/carritoController.php';
?>

<!DOCTYPE html>
<html>

<?php 
    HeadCSS();
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <?php 
          MostrarMenu();
        ?>

        <div class="content-wrapper" style="background-image: url(/images/bg_4.jpg);">
            <section class="content">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0" style= "color: #fac564;">Mi Carrito</h1>
                                <br/>

                                <?php
                                    if(isset($_POST["msj"]))
                                    {
                                        echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                    }
                                ?>

                                <table style= "color: #fac564;" id="tablaCarrito" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Souvenir</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>                                            
                                            <th>SubTotal</th>
                                            <th>Impuesto</th>
                                            <th>Total</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            ConsultarCarrito();
                                        ?>
                                    </tbody>
                                </table>

                                <br /><br />

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <p style="font-size:14pt; margin-top:2%">El monto a cancelar es de: <b>¢<?php echo number_format($_SESSION["Total"],2) ?></b> </p>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <form action="" method="POST">
                                            <?php
                                                if($_SESSION["Total"] != "0")
                                                {
                                                    echo '<button id="btnPagarCarrito" name="btnPagarCarrito" type="submit" class="btn btn-outline-primary" style="width:200px">Pagar</button>';
                                                }
                                            ?>    
                                        </form>                              
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <?php 
        HeadJS();
    ?>
    <script>
        $(document).ready(function(){
            $("#tablaCarrito").DataTable({
                language : {
                    url: 'dist/language.json'
                },
                columnDefs:  [{ type: 'string', target: [0,1,2,3,4,5]}]
            });
        });
    </script>    
</body>
</html>