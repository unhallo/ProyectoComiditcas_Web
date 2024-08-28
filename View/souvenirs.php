<?php include_once 'layoutInterno.php'; 
      include_once '../Controller/souvenirController.php';
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
                            <h1 class="m-0" style= "color: #fac564;">Souvenirs Típicos</h1>
                            <br/>

                            <?php
                                if(isset($_POST["msj"]))
                                {
                                  echo '<div class="alert alert-info TextoCentrado">' . $_POST["msj"] . '</div>';
                                }
                            ?>
                          <br/>

                        
                          <tbody>
                            <?php
                                ConsultarSouvenirsParaComprar();
                            ?>
                          </tbody>
                        </table>   
                      </div>
                    </div>

      
    </section>
    
     
		<section class="ftco-appointment">
    <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
        <?php 
          
          Nosotros();
        ?>

	    		<div class="col-md-6 appointment ftco-animate">
          <?php
              Contactenos()
          ?>
	    		
	    		</div>    			
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">

         
          <?php
           Consultas();
          ?>
          
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


   <?php 
        HeadJS();
?>
   
    
  </body>
</html>