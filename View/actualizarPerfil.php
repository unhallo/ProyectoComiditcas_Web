<?php include_once 'layoutInterno.php';
      include_once '../Controller/usuarioController.php';
      include_once '../Controller/rolController.php'; 

      $datos = ConsultarUsuario($_SESSION["ConsecutivoUsuario"]);
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
                        <h1 class="m-0" style= "color: #fac564;">Datos del perfil</h1>
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

                                <form action="" method="post">

                                    <input id="txtConsecutivo" name="txtConsecutivo" type="hidden" value="<?php echo $datos["Consecutivo"] ?>">

                                    <Label style= "color: #fac564;">Identificación</Label>
                                    <div class="input-group mb-3">
                                        <input id="txtIdentificacion" name="txtIdentificacion" type="text"
                                            class="form-control" placeholder="Identificación"
                                            onkeyup="ConsultarNombre('btnActualizarUsuario');" required
                                            value="<?php echo $datos["Identificacion"] ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <Label style= "color: #fac564;">Nombre</Label>
                                    <div class="input-group mb-3">
                                        <input id="txtNombre" name="txtNombre" type="text" readOnly class="form-control"
                                            placeholder="Nombre" required value="<?php echo $datos["Nombre"] ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <Label style= "color: #fac564;">Correo Electrónico</Label>
                                    <div class="input-group mb-3">
                                        <input type="email" id="txtEmail" name="txtEmail" class="form-control"
                                            placeholder="Correo Electrónico" required
                                            value="<?php echo $datos["Correo"] ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <Label style= "color: #fac564;">Perfil</Label>
                                    <div class="input-group mb-3">
                                        <select disabled id="selectRol" name="selectRol" class="form-control" required>
                                            <?php ConsultarRoles($datos["IdRol"]); ?>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-9">

                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <button type="submit" id="btnActualizarPerfil" name="btnActualizarPerfil"
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
    <script src="dist/js/usuarios.js"></script>
</body>

</html>