<?php include_once 'layoutInterno.php';
      include_once '../Controller/usuarioController.php'; 
?>
<!DOCTYPE html>
<html>
<head>
                <title>ComidiTicas</title>
                <meta charset="utf-8">
                <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
                <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                <link rel="stylesheet" href="dist/css/adminlte.min.css">
                <link rel="stylesheet" href="dist/css/styles.css">
            </head>

<body  class="hold-transition login-page bg-dark" style="background-image: url(/images/bg_1.jpg);">
<div class="login-box" >
  <div class="login-logo">
  <img src="/images/CR.jpg" alt="CR" class="mr-1" >
    <a href="../../index.php"><b style= "color: #fff;">Comidi
            <br>
            <small style= "color: #fac564;">Ticas</small>
          </a>
  </div>
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa tus datos para inciar sesion</p>

      <?php
          if(isset($_POST["msj"]))
          {
            echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
          }
      ?>

      <form action="" method="post">

      <Label>Correo Electrónico</Label>
        <div class="input-group mb-3">
          <input type="email" id="txtEmail" name="txtEmail" class="form-control" 
          placeholder="Correo Electronico"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <Label>Contraseña</Label>
        <div class="input-group mb-3">
          <input type="password" id="txtPassword" name="txtPassword" class="form-control" 
          placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-8">

            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuerdame
              </label>
            </div>
          </div>
          
          <div class="col-4">
            <button type="submit" id="btnIniciarSesion" name="btnIniciarSesion" 
            class="btn btn-primary btn-block">Inicio de Sesion</button>
          </div>
        </div>
      </form>



      <p class="mb-1">
        <a href="recuperar.php">Olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="registro.php" class="text-center">Registrar un nuevo usuario</a>
    </div>
   
  </div>
</div>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/jquery-migrate-3.0.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/jquery.waypoints.min.js"></script>
        <script src="../js/jquery.stellar.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/aos.js"></script>
        <script src="../js/jquery.animateNumber.min.js"></script>
        <script src="../js/bootstrap-datepicker.js"></script>
        <script src="../js/jquery.timepicker.min.js"></script>
        <script src="../js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="../js/google-map.js"></script>
        <script src="../js/main.js"></script>
</body>
</html>
