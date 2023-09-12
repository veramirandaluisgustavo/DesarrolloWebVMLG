<?php
function conectar() {
    $servername = "localhost";
    $username = "luis";
    $password = "";
    $dbname = "bd_alumnos";
    $port = 3308; 

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    return $conn;
}
?>
