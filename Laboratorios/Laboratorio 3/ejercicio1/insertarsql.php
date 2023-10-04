<?php

    include("conexion.php");
    $descripcion = $_POST["descripcion"];
    $numero_camas = $_POST["numero_camas"];

  
    $sql = "INSERT INTO tipo_habitacion (descripcion, numero_camas) VALUES ('$descripcion', '$numero_camas')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro insertado exitosamente. ";
    } else {
        echo "Error al insertar el registro: " . $conexion->error;
    }


?>