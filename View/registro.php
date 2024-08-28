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
                
            </head>

<body  class="hold-transition login-page bg-dark" style="background-image: url(/images/bg_1.jpg);" >
  <div class="register-box" >
    <div class="register-logo">
    <img src="/images/CR.jpg" alt="CR" class="mr-1" >
      <a href="../../index.php"><b style= "color: #fff;">Comidi
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
