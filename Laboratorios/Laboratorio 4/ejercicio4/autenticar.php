<?php
session_start();

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($data) {
    $usuario = $data['usuario'];
    $contrasena = $data['contrasena'];
    if ($usuario === 'admin' && $contrasena === '123') {
            $_SESSION['nivel'] = 'autenticado';
            echo 'Autenticado correctamente';
        } else {
            echo 'No autenticado';
        }
} else {
    echo 'Error al decodificar los datos JSON.';
}
