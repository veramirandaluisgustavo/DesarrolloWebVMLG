<?php
include("conexion.php");


?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Insertar</h1>

    
    <form action="insertarsql.php" method="post">
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" required>
        <br>
        <label for="numero_camas">Numero de Camas:</label>
        <input type="number" name="numero_camas" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>
