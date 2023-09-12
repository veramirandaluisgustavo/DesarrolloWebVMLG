<?php
include "funciones.php"; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (eliminarEstudiante($id)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<p class='error'>Error al eliminar estudiante.</p>";
        echo "<a href='index.php'>Volver</a>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
