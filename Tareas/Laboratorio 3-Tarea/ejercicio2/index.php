<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>

<?php

include("conexion.php");

$sql = "SELECT id FROM habitacion ";
$result = $conexion->query($sql);



?>

<body>
    

    <h1>SELECIONES EL ID DE LA HABITACION</h1>
    <form action="buscador.php" method="post">
        
        <label for="id">el id de la habitacion:</label>
        <select name="id" id="id">
            <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='". $row["id"] . "'>". $row["id"]."</option>";
                    
                }
            } else {
             echo "No se encontraron resultados";
            }

            ?>
            
        </select>
        <br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
