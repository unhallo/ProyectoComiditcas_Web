<?php include_once 'layoutInterno.php'; ?>

<!DOCTYPE html>
<html lang="en">
  
<?php 
    HeadCSS();
?>
  <body>
  <?php 
          
          MostrarMenu();
        ?>
  
    <?php
     Bienvenida();
    ?>
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php 
        HeadJS();
?>
    
  </body>
</html>