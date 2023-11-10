<?php
    include('conexion.php');

    $orden = isset($_GET['orden']) ? $_GET['orden'] : 'ASC';

    $sql = "SELECT * FROM libros INNER JOIN editoriales ON libros.ideditorial = editoriales.id ORDER BY titulo $orden";
    $resultado = $con->query($sql);
?>

<table border="1">
    <tr>
        <th>Imagen</th>
        <th onclick="ordenarLibros('<?php echo $orden === 'ASC' ? 'DESC' : 'ASC'; ?>')">Titulo</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Año</th>
    </tr>
    <?php while($libro = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><img src="images/<?php echo $libro['imagen'] ?>" height="70px"></td>
            <td><?php echo $libro['titulo'] ?></td>
            <td><?php echo $libro['autor'] ?></td>
            <td><?php echo $libro['editorial'] ?></td>
            <td><?php echo $libro['anio'] ?></td>
        </tr>
    <?php } ?>
    <script src="script.js"></script>
</table>