<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Alumnos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <?php 
    include "funciones.php";

    $alumnos = obtenerAlumnos();

    if ($alumnos) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombres</th>";
        echo "<th>Apellidos</th>";
        echo "<th>CU</th>";
        echo "<th>ID Carrera</th>";
        echo "<th>Acciones</th>";
        echo "</tr>";

        foreach ($alumnos as $alumno) {
            echo "<tr>";
            echo "<td>" . $alumno['id'] . "</td>";
            echo "<td>" . $alumno['nombres'] . "</td>";
            echo "<td>" . $alumno['apellidos'] . "</td>";
            echo "<td>" . $alumno['CU'] . "</td>";
            echo "<td>" . $alumno['idcarrera'] . "</td>";
            echo "<td>";
            echo "<a href='editar_alumno.php?id=" . $alumno['id'] . "'>Editar</a> ";
            echo "<a href='eliminar_alumno.php?id=" . $alumno['id'] . "'>Eliminar</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se encontraron alumnos.</p>";
    }
    ?>
    <a href="crear_alumno.php">Crear Alumno</a>
</body>
</html>

