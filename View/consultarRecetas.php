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
                                <h1 class="m-0" style= "color: #fac564;">Consulta de Recetas</h1>
                                <br/>
                                <section class="home-slider owl-carousel img" style="background-image: url(/images/bg_1.jpg);">
              <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
                  <div class="overlay"></div>
                    <div class="container">
                      <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                      <div class="col-md-7 col-sm-12 text-center ftco-animate">
                          <span class="subheading">Proximamente</span>
                          <h1 class="mb-4">En este pantalla podras gestionar las recetas que  se encuentran en la base de datos</h1>
                          <p class="mb-4 mb-md-5">Como administrador tienes acceso completo a todas las funcionalidades y herramientas necesarias para gestionar eficientemente nuestras operaciones. Si necesitas asistencia o tienes alguna pregunta, no dudes en contactar a nuestro equipo de soporte. ¡Pura vida en cada mordizco!</p>
                        </div>

                      </div>
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
        
</body>
</html>