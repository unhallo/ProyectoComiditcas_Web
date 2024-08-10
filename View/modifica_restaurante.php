<?php include_once 'layoutInterno.php';
      include_once '../Controller/restaurantesController.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php 
    HeadCSS();
?>
  <body>
 
  <?php 
          
          MostrarMenu();
        ?>
    <div class="container my-5" style="background:black;border-radius:10px;padding: 20px;">
        <h1>Modificar restaurante</h1>

        <form method="post">
            <?php foreach($restaurante as $rest): ?>

                <input type="hidden" name="id" value="<?php echo $rest->COD_REST ?>" id="id">

                <div class="form-element mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" placeholder="Digite el nombre"
                        id="nombre" class="form-control" value="<?php echo $rest->NOM_REST ?>">
                </div>

                <div class="form-element mb-3">
                    <label for="menu" class="form-label">Menu</label>
                    <input type="text" name="menu" placeholder="Digite el nombre"
                        id="menu" class="form-control" value="<?php echo $rest->MENU_REST ?>">
                </div>

            <?php endforeach; ?>

            <div class="text-end">
                <button type="submit" id="actualizar" name="actualizar" class="btn btn-primary">Actualizar restaurante</button>
            </div>
        </form>
    </div>
</body>

</html>