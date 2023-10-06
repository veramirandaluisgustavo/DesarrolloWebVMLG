<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Subir</h1>

    <?php
    include("conexion.php");

        $id_habitacion = $_GET["id"];
    
    ?>

    
    <form action="subir_imagensql.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_habitacion" value="<?php echo $id_habitacion; ?>">
        <label for="imagenes">Selecciona imagen:</label>
        <input type="file" name="imagenes[]" multiple required>
        <br>
        <input type="submit" value="Subir Imágenes">
        
    </form>
</body>
</html>

<?php

$conexion->close();
?>
