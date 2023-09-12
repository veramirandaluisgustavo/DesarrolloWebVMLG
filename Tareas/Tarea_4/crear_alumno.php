<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Alumno</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h1>Crear Alumno</h1>
    <?php
    include "funciones.php"; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $cu = $_POST['cu'];
        $idcarrera = $_POST['idcarrera'];

        if (insertarEstudiante($nombres, $apellidos, $cu, $idcarrera)) {
            echo "<p class='exito'>Estudiante insertado con éxito.</p>";
        } else {
            echo "<p class='error'>Error al insertar estudiante.</p>";
        }
    }
    ?>
    <form action="" method="post">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" required>
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required>
        <br>
        <label for="cu">CU:</label>
        <input type="text" name="cu" required>
        <br>
        <label for="idcarrera">ID Carrera:</label>
        <input type="number" name="idcarrera" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
    <a href="index.php">Ver Alumnos</a>
</body>
</html>
