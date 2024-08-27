<?php   include_once 'layoutInterno.php';
        include_once '../Controller/restauranteController.php';
      
        ValidarRolAdministrador();
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

        <div class="content-wrapper"  style="background-image: url(/images/bg_4.jpg);">
            <section class="content">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0" style= "color: #fac564;">Consulta de Restaurantes</h1>
                                <br/>

                                <?php
                                    if(isset($_POST["msj"]))
                                    {
                                        echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                    }
                                ?>

                                <div>
                                    <a class="btn btn-primary" href="registrarRestaurantes.php">
                                        <i class="fa fa-plus" style="margin-right:5px"> </i>Registrar
                                    </a>
                                </div>
                                <br/>

                                <table style= "color: #fac564;" id="tablaRestaurantes" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Provincia</th>
                                            <th>Dirección Exacta</th>
                                            <th>Imagen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            consultarRestaurantes();
                                        ?>
                                    </tbody>
                                </table>


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
        
</body>
</html>