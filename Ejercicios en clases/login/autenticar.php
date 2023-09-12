<?php session_start();
include ("conexion.php");
$correo=$_POST['correo'];
$password=sha1($_POST['password']);
$sql="SELECT nombre,correo.rol from usuario where correo=$correo and password";

$resultado = $con->query($sql);
if($resultado=$num_rows>0){
    $fila = $resultado->fetch_assoc();
    
};
