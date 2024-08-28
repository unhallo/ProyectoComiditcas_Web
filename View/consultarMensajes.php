<?php   include_once 'layoutInterno.php';
        include_once '../Controller/usuarioController.php';
      
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

        <div class="content-wrapper" style="background-image: url(/images/bg_4.jpg);">
            <section class="content">

                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h1 class="m-0" style= "color: #fac564;">Consulta de mensajes</h1>
                                <br/>

                                <?php
                                    if(isset($_POST["msj"]))
                                    {
                                        echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                    }
                                ?>

                                <table style= "color: #fac564;" id="tablaMensajes" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Mensaje</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
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

    <div class="modal fade" id="ModalMensajes" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:600px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalle del mensaje</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="txtConsecutivo" name="txtConsecutivo">
                        ¿Desea cambiar el estado del mensaje <label id="lblMensaje"></label> ?
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnCambiarEstadoMensaje"
                            name="btnCambiarEstadoMensaje">Procesar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php 
        HeadJS();
    ?>
    <script>
        $(document).on("click", ".AbrirModal", function() {
            $("#lblMensaje").text($(this).attr('data-mensaje'));
            $("#txtConsecutivo").val($(this).attr('data-id'));
        });

        $(document).ready(function(){
            $("#tablaMensajes").DataTable({
                language : {
                    url: 'dist/language.json'
                },
                columnDefs:  [{ type: 'string', target: [0,1,2,3,4,5]}]
            });
        });
    </script>    
</body>
</html>