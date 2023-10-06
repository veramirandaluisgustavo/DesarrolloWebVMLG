<?php

include ("conexion.php");

    
    $id = $_GET["id"];

    
    $sql = "SELECT * FROM tipo_habitacion WHERE id = $id";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $descripcion = $row["descripcion"];
        $numero_camas = $row["numero_camas"];
    } else {
        echo "No se encontró el registro";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>

    
    <form action="editarsql.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" required>
        <br>
        <label for="numero_camas">Número de Camas:</label>
        <input type="number" name="numero_camas" value="<?php echo $numero_camas; ?>" required>
        <br>
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>
