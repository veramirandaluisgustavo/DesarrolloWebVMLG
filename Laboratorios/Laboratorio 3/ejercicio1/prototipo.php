<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    


    <table style="border:1">
        <tr>
            <th>ID</th>
            <th>Descripcion</th>
            <th>Número de Camas</th>
            <th>Acciones</th>
        </tr>
        <?php
        include ("conexion.php");
        


        
        $sql = "SELECT * FROM tipo_habitacion";
        $datos = $conexion->query($sql);

        if ($datos->num_rows > 0) {
            while ($row = $datos->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["descripcion"] . "</td>";
                echo "<td>" . $row["numero_camas"] . "</td>";
                echo "<td><a href='editar.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar.php?id=" . $row["id"] . "'>Eliminar</a></td>";
                echo "</tr>";
                
            }
            
        } 
        echo"<a href=insertar.php? >Insertar</a>";

        
        $conexion->close();
        ?>
    </table>

    
</body>
</html>
