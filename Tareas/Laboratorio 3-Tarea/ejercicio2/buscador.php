

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table style="border:1;">
<tr>
    <th>ID</th>
    <th>Número</th>
    <th>Tipo de Habitación</th>
    <th>Baño Privado</th>
    <th>Espacio (m²)</th>
    <th>Precio</th>
    <th>Imagenes</th>
    <th>Opciones</th>
</tr>
<?php
include("conexion.php");

$tipo = $_POST['id'];
$sql = "SELECT * FROM habitacion  LEFT JOIN fotos_habitacion  ON habitacion.id =fotos_habitacion.id WHERE habitacion.id=$tipo ORDER BY habitacion.id";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nro"] . "</td>";
        echo "<td>" . obtenerTipoHabitacion($conexion, $tipo) . "</td>";
        echo "<td>" . ($row["bano_privado"] ? "Sí" : "No") . "</td>";
        echo "<td>" . $row["espacio"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        
        echo "<td><a href='subir_imagen.php?id=" . $row["id"] . "'>Subir Imágenes</a><a href='eliminar.php?id=" . $row["id"] . "'> | Eliminar</a><a href='editar.php?id=" . $row["id"] . "'> | Editar</a></td>";
        echo "</tr>";
    }
} else {
    echo "No se encontraron resultados";
}

function obtenerTipoHabitacion($conexion, $id_tipo_habitacion) {
    $sql = "SELECT descripcion FROM tipo_habitacion WHERE id = $id_tipo_habitacion";
    $result = $conexion->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        return $row["descripcion"];
    } else {
        return "Desconocido";
    }
}




$conexion->close();
?>
</table>
    
    
</body>
</html>
