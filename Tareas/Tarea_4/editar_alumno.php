<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Alumno</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h1>Editar Alumno</h1>
    <?php
    include "funciones.php"; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $cu = $_POST['cu'];
        $idcarrera = $_POST['idcarrera'];

        if (actualizarEstudiante($id, $nombres, $apellidos, $cu, $idcarrera)) {
            echo "<p class='exito'>Estudiante actualizado con éxito.</p>";
        } else {
            echo "<p class='error'>Error al actualizar estudiante.</p>";
        }
    } elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        $alumno = obtenerAlumnoPorId($id);

        if ($alumno) {
    ?>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" value="<?php echo $alumno['nombres']; ?>" required>
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php echo $alumno['apellidos']; ?>" required>
        <br>
        <label for="cu">CU:</label>
        <input type="text" name="cu" value="<?php echo $alumno['CU']; ?>" required>
        <br>
        <label for="idcarrera">ID Carrera:</label>
        <input type="number" name="idcarrera" value="<?php echo $alumno['idcarrera']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
    <a href="index.php">Cancelar</a>
    <?php
        } else {
            echo "<p class='error'>Estudiante no encontrado.</p>";
            echo "<a href='index.php'>Volver</a>";
        }
    }
    ?>
    <a href="index.php">Ver Alumnos</a>
</body>
</html>
