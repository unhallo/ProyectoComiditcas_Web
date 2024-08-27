<?php include_once 'layoutInterno.php';
      include_once '../Controller/restauranteController.php';
      include_once '../Controller/provinciaController.php'; 
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
                        <h1 class="m-0" style= "color: #fac564;">Datos del Restaurante</h1>
                        <br />
                        <div class="row mb-2">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-8">

                                <?php
                                    if(isset($_POST["msj"]))
                                    {
                                        echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                    }
                                ?>

                                <form action="" method="post" enctype="multipart/form-data">

                                <Label style= "color: #fac564;">Nombre del Restaurante</Label>
                                    <div class="input-group mb-3">
                                        <input id="txtNombreRest" name="txtNombreRest" type="text"
                                            class="form-control" placeholder="Escriba aquí" required value=""
                                            placeholder-style="color: #fff;">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-tag"></span>
                                            </div>
                                        </div>
                                    </div>


                                

                                <Label style= "color: #fac564;">Dirección Exacta</Label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="txtDireccExact" name="txtDireccExact" class="form-control"
                                            placeholder="Escriba aquí" required value="" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fa fa-location-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <Label style= "color: #fac564;">Provincia</Label>
                                    <div class="input-group mb-3">
                                        <select  id="selectProvincia" name="selectProvincia"class="form-control" required>
                                        <?php ConsultarProvincias(); ?>
                                        </select>
                                    </div>

                                <Label style= "color: #fac564;">Imagen</Label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input id="txtImagen" name="txtImagen" type="file" class="form-control"
                                            placeholder="Imagen" required value="" accept="image/png, image/jpg, image/jpeg">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-camera"></span>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-9">

                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <button type="submit" id="btnRegistrarRestaurante" name="btnRegistrarRestaurante"
                                                class="btn btn-primary btn-block">Procesar</button>
                                        </div>
                                    </div>
                                </form>

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
    <script src="dist/js/souvenirs.js"></script>
</body>

</html>