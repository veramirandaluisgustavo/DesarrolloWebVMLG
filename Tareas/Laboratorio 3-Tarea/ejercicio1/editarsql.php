<?php
include ("conexion.php");

    $id = $_POST["id"];
    $descripcion = $_POST["descripcion"];
    $numero_camas = $_POST["numero_camas"];

    // Actualizar el registro en la base de datos
    $sql = "UPDATE tipo_habitacion SET descripcion = '$descripcion', numero_camas = '$numero_camas' WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente.";
    } else {
        echo "Error al actualizar el registro: " . $conexion->error;
    }
