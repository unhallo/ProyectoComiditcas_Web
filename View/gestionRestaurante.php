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
    <div class="container my-5" style="background:black;border-radius:10px;padding: 20px;">
        <h1>Restaurantes</h1>
        <a href="./nuevo_restaurante.php" class="btn btn-primary mb-3">Nuevo restaurante</a>

        <table class="table table-hover" style="color:white;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Menu</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                
                    <tr>
                        <td style="width: 150px;">
                            
                        </td>

                        <td style="width: 150px;">
                            
                        </td>

                        <td style="width: 150px;">
                            
                        </td>
                        <td class="text-end">
                            <a href="./modifica_restaurante.php?id=" class="btn btn-primary">Modificar restaurante</a>
                            <a href="./modifica_direccion.php?id=" class="btn btn-success">Modificar direccion</a>
                            <a href="./gestionRestaurante.php?id=" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
</body>

</html>