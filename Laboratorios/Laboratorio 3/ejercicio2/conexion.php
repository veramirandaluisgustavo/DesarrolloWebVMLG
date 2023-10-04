<?php
$conexion = new mysqli("localhost", "root", "", "bd_hotel","3308");

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
};
?>
