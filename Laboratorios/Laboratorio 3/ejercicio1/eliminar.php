<?php
include("conexion.php");
  
    $id = $_GET["id"];
    $sql = "DELETE FROM tipo_habitacion WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado exitosamente. ";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
?>