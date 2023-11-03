<?php
include "conexion.php";

$id_departamento=$_GET["departamento"];
$sql="SELECT id,provincia FROM departamentos WHERE $id_departamento= iddepartamento";
$resultado = $con->query($sql);
    if($resultado->num_rows>0){
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



