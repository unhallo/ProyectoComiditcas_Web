<?php include_once 'layoutInterno.php';
      include_once '../Controller/usuarioController.php'; 
?>
<!DOCTYPE html>
<html>

<head>
                <title>ComidiTicas</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
                <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                <link rel="stylesheet" href="dist/css/adminlte.min.css">
                <link rel="stylesheet" href="dist/css/styles.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
                <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap4.css">
                <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
                <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
                <link rel="stylesheet" href="css/animate.css">
                <link rel="stylesheet" href="css/owl.carousel.min.css">
                <link rel="stylesheet" href="css/owl.theme.default.min.css">
                <link rel="stylesheet" href="css/magnific-popup.css">					
                <link rel="stylesheet" href="css/aos.css"
                <link rel="stylesheet" href="css/ionicons.min.css">
                <link rel="stylesheet" href="css/bootstrap-datepicker.css">
                <link rel="stylesheet" href="css/jquery.timepicker.css"
                <link rel="stylesheet" href="css/flaticon.css">
                <link rel="stylesheet" href="css/icomoon.css">
                <link rel="stylesheet" href="css/style.css">
            </head>

<body  class="hold-transition login-page bg-dark"  >
  <div class="register-box" >
    <div class="register-logo">
      <a style= "color: #fff;">Comidi
            <br>
            <small style= "color: #fac564;">Ticas</small>
          </a>
  </div>
  
  
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrar nuevo usuario</p>

      <?php
          if(isset($_POST["msj"]))
          {
             echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
          }
      ?>

      <form action="" method="post">

      <Label>Identificación</Label>
      <div class="input-group mb-3">
        <input id="txtIdentificacion" name="txtIdentificacion" type="text" class="form-control"
        placeholder="Identificación" onkeyup="ConsultarNombre('btnRegistrarUsuario');" required>
        <div class="input-group-append">
           <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
        </div>
      </div>

        <Label> Nombre Completo </Label>
        <div class="input-group mb-3">
          <input id="txtNombre" name="txtNombre" type="text" class="form-control" 
          placeholder="Nombre Completo"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <Label> Correo Electronico </Label>
        <div class="input-group mb-3">
          <input type="email" id="txtEmail" name="txtEmail" class="form-control" 
          placeholder="Correo Electronico"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <Label> Contraseña </Label>
        <div class="input-group mb-3">
          <input type="password" id="txtPassword" name="txtPassword" class="form-control" 
          placeholder="Contraseña"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <Label> Repita Su Contraseña </Label>
        <div class="input-group mb-3">
          <input type="password" id="txtRetypePassword" name="txtRetypePassword" class="form-control" 
          placeholder="Retype password"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Estoy de acuerdo con <a href="#">los terminos</a>
              </label>
            </div>
          </div>
          
          <div class="col-4">
            <button type="submit" id="btnRegistrarUsuario" name="btnRegistrarUsuario" enable
            class="btn btn-primary btn-block">Registro</button>
          </div>
        </div>
      </form>

      <p class="mb-0">
        <a href="login.php" class="text-center">Ya tengo una cuenta</a>
        </p>

    </div>
  </div>
</div>

<?php 
        HeadJS();
?>
    <script src="dist/js/usuarios.js"></script>
</body>
</html>
