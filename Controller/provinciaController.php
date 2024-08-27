<?php include_once '../Model/provinciaModel.php';

    function ConsultarProvincias()
    {
        $respuesta = ConsultarProvinciasBD();
        echo "<option style='color: #f564; background-color: #000;' value=''> Seleccione </option>";
        
        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                echo "<option style='color: #fac564; background-color: #000;' value=" . $row["IdProvincia"] . ">" . $row["NombreProvincia"] . "</option>";
            }
        }
    }

    function ConsultarProvinciasEditar($IdProvincia)
    {
        $respuesta = ConsultarProvinciasBD();
        echo "<option style='color: #fac564; background-color: #000;' value=''> Seleccione </option>";
        
        if($respuesta -> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($respuesta)) 
            { 
                if($IdProvincia == $row["IdProvincia"])
                {
                    echo "<option selected style='color: #fac564; background-color: #000;' value=" . $row["IdProvincia"] . ">" . $row["NombreProvincia"] . "</option>";
                }
                else
                {
                    echo "<option style='color: #fac564; background-color: #000;' value=" . $row["IdProvincia"] . ">" . $row["NombreProvincia"] . "</option>";
                }
            }
        }
    }

    

?>