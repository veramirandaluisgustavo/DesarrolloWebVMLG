<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($usuario === 'admin' && $contrasena === '123') {
    $_SESSION['nivel'] = 'autenticado';
    echo 'Autenticado correctamente';
} else {
    echo 'No autenticado';
}
