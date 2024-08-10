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
        <h1>Nuevo restaurante</h1>

        <form  method="post">
            <h3 style= "color: #fac564;">Direccion del restaurante</h3>
            <br>

            <div class="form-element mb-3">
                
                <select name="provincia" id="provincia" class="form-control" required>
                    <option value="" disabled selected style= "color: #fac564;background:black;">Seleccione la provincia</option>
                    <option value="San José" style= "color: #fac564;background:black;"> San José</option>   
                    <option value="Cartago"style= "color: #fac564;background:black;">Cartago</option>
                    <option value="Heredia"style= "color: #fac564;background:black;">Heredia</option>
                    <option value="Alajuela"style= "color: #fac564;background:black;">Alajuela</option>
                    <option value="Puntarenas"style= "color: #fac564;background:black;">Puntarenas</option>
                    <option value="Limon"style= "color: #fac564;background:black;">Limón</option>
                    <option value="Guanacaste"style= "color: #fac564;background:black;">Guanacaste</option>
                </select>
            </div>

            <div class="form-element mb-3">

                <select name="canton" id="canton" class="form-control" required>
                <option value="" disabled selected style="color: #fac564;background:black;">Seleccione el Cantón</option>
                <optgroup label="Cantones en San José" style= "color: #fac564;background:black;" id="cantonesSanJosé">
                        <option value="Desamparados"style= "color: #fac564;background:black;">Desamparados</option>
                        <option value="Goicoechea"style= "color: #fac564;background:black;">Goicoechea</option>
                        <option value="Montes de Oca"style= "color: #fac564;background:black;">Montes de Oca</option>
                <optgroup label="Cantones en Cartago" style= "color: #fac564;background:black;" id="cantonesCartago">
                        <option value="Cartago"style= "color: #fac564;background:black;">Cartago</option>
                        <option value="Paraíso"style= "color: #fac564;background:black;">Paraíso</option>
                        <option value="La Unión"style= "color: #fac564;background:black;">La Unión</option>
                <optgroup label="Cantones en Heredia" style= "color: #fac564;background:black;" id="cantonesHeredia">
                        <option value="Heredia"style= "color: #fac564;background:black;">Heredia</option>
                        <option value="Barva"style= "color: #fac564;background:black;">Barva</option>
                        <option value="Santo Domingo"style= "color: #fac564;background:black;">Santo Domingo</option>
                <optgroup label="Cantones en Alajuela" style= "color: #fac564;background:black;" id="cantonesAlajuela">
                        <option value="Alajuela"style= "color: #fac564;background:black;">Alajuela</option>
                        <option value="San Ramón"style= "color: #fac564;background:black;">San Ramón</option>
                        <option value="Grecia"style= "color: #fac564;background:black;">Grecia</option>
                <optgroup label="Cantones en Puntarenas" style= "color: #fac564;background:black;" id="cantonesPuntarenas">
                        <option value="Puntarenas"style= "color: #fac564;background:black;">Puntarenas</option>
                        <option value="Esparza"style= "color: #fac564;background:black;">Esparza</option>
                        <option value="Buenos Aires"style= "color: #fac564;background:black;">Buenos Aires</option>
                <optgroup label="Cantones en Limón" style= "color: #fac564;background:black;" id="cantonesLimón">
                        <option value="Limón"style= "color: #fac564;background:black;">Limón</option>
                        <option value="Pococí"style= "color: #fac564;background:black;">Pococí</option>
                        <option value="Siquirres"style= "color: #fac564;background:black;">Siquirres</option>
                <optgroup label="Cantones en Guanacaste" style= "color: #fac564;background:black;" id="cantonesGuanacaste">
                        <option value="Liberia"style= "color: #fac564;background:black;">Liberia</option>
                        <option value="Nicoya"style= "color: #fac564;background:black;">Nicoya</option>
                        <option value="Santa Cruz"style= "color: #fac564;background:black;">Santa Cruz</option>
                        
                </select>
            </div>

            <script>
    const provinciaSelect = document.getElementById("provincia");
    const cantonSelect = document.getElementById("canton");
    const cantonesSanJosé = document.getElementById("cantonesSanJosé");
    const cantonesCartago = document.getElementById("cantonesCartago");
    const cantonesHeredia = document.getElementById("cantonesHeredia");
    const cantonesAlajuela = document.getElementById("cantonesAlajuela");
    const cantonesPuntarenas = document.getElementById("cantonesPuntarenas");
    const cantonesLimón = document.getElementById("cantonesLimón");
    const cantonesGuanacaste = document.getElementById("cantonesGuanacaste");
    const distritoSelect = document.getElementById("distrito");
    const distritosDesamparados = document.getElementById("distritosDesamparados");
    const distritosGoicoechea = document.getElementById("distritosGoicoechea");

    provinciaSelect.addEventListener("change", function () {
        const selectedProvincia = provinciaSelect.value;
        const selectedCanton = cantonSelect.value;
        if (selectedProvincia === "San José") {
            cantonesSanJosé.style.display = "block";
            cantonesCartago.style.display = "none";
            cantonesHeredia.style.display = "none";
            cantonesAlajuela.style.display = "none";
            cantonesPuntarenas.style.display = "none";
            cantonesLimón.style.display = "none";
            cantonesGuanacaste.style.display = "none";
               
            
        } else if (selectedProvincia === "Cartago") {
            cantonesSanJose.style.display = "none";
            cantonesCartago.style.display = "block";
            cantonesHeredia.style.display = "none";
            cantonesAlajuela.style.display = "none";
            cantonesPuntarenas.style.display = "none";
            cantonesLimón.style.display = "none";
            cantonesGuanacaste.style.display = "none";
            
        } else if (selectedProvincia === "Heredia") {
            cantonesSanJose.style.display = "none";
            cantonesCartago.style.display = "none";
            cantonesHeredia.style.display = "block";
            cantonesAlajuela.style.display = "none";
            cantonesPuntarenas.style.display = "none";
            cantonesLimón.style.display = "none";
            cantonesGuanacaste.style.display = "none";

        }else if (selectedProvincia === "Alajuela") {
            cantonesSanJose.style.display = "none";
            cantonesCartago.style.display = "none";
            cantonesHeredia.style.display = "none";
            cantonesAlajuela.style.display = "block";
            cantonesPuntarenas.style.display = "none";
            cantonesLimón.style.display = "none";
            cantonesGuanacaste.style.display = "none";

        }else if (selectedProvincia === "Puntarenas") {
            cantonesSanJose.style.display = "none";
            cantonesCartago.style.display = "none";
            cantonesHeredia.style.display = "none";
            cantonesAlajuela.style.display = "none";
            cantonesPuntarenas.style.display = "block";
            cantonesLimón.style.display = "none";
            cantonesGuanacaste.style.display = "none";

        }else if (selectedProvincia === "Limón") {
            cantonesSanJose.style.display = "none";
            cantonesCartago.style.display = "none";
            cantonesHeredia.style.display = "none";
            cantonesAlajuela.style.display = "none";
            cantonesPuntarenas.style.display = "none";
            cantonesLimón.style.display = "block";
            cantonesGuanacaste.style.display = "none";

        }else if (selectedProvincia === "Guanacaste") {
            cantonesSanJose.style.display = "none";
            cantonesCartago.style.display = "none";
            cantonesHeredia.style.display = "none";
            cantonesAlajuela.style.display = "none";
            cantonesPuntarenas.style.display = "none";
            cantonesLimón.style.display = "none";
            cantonesGuanacaste.style.display = "block";

        }else {
            
            cantonesSanJose.style.display = "none";
            cantonesCartago.style.display = "none";
            cantonesHeredia.style.display = "none";
            cantonesAlajuela.style.display = "none";
            cantonesPuntarenas.style.display = "none";
            cantonesLimón.style.display = "none";
            cantonesGuanacaste.style.display = "none";
            
            
        }
    });
</script>

            <div class="form-element col-mb-3">
                <input type="text" name="distrito" placeholder="Digite el distrito"
                    id="distrito" class="form-control">
            </div>

            <div class="form-element col-mb-3">
                <input type="text" name="dir" placeholder="Digite la direccion exacta"
                    id="dir" class="form-control">
            </div>

            <br>
            <h3 style= "color: #fac564;">Informacion del restaurante</h3>
            <br>

            <div class="form-element mb-3">
                <input type="text" name="nombre" placeholder="Digite el nombre del restaurante"
                    id="nombre" class="form-control">
            </div>

            <div class="form-element mb-3">
                <label for="horario" class="form-label">Horario</label>
                <input type="text" name="horario" placeholder="Abierto los días:"
                    id="horario" class="form-control">
            </div>

            <div class="form-element mb-3">
            <label for="horaApertura" class="form-label">Hora de Apertura</label>
            <input type="time" id="horaApertura" name="horaApertura" class="form-control">
            </div>

            <div class="form-element mb-3">
            <label for="horaCierre" class="form-label">Hora de Cierre</label>
            <input type="time" id="horaCierre" name="horaCierre" class="form-control">
            </div>
            <div class="text-end">
                <button type="submit" id="enviar_restaurante" name="enviar_restaurante"
                class="btn btn-primary">Registrar Restaurante</button>
            </div>
        </form>
    </div>
    <?php 
        HeadJS();
?>
</body>

</html>