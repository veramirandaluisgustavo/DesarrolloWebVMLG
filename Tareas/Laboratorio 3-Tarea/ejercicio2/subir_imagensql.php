<?php
    include("conexion.php");

 $id_habitacion = $_POST["id_habitacion"];
        
        
        $ruta_destino = "imagenes/";

        $num_imagenes = count($_FILES['imagenes']['name']);
        for ($i = 0; $i < $num_imagenes; $i++) {
            $nombre_archivo = $_FILES['imagenes']['name'][$i];
            $ruta_temporal = $_FILES['imagenes']['tmp_name'][$i];
            $ruta_final = $ruta_destino . $nombre_archivo;

            if (move_uploaded_file($ruta_temporal, $ruta_final)) {
                
                $sql = "INSERT INTO fotos_habitacion (id_habitacion, fotografia) VALUES ($id_habitacion, '$nombre_archivo')";
                if ($conexion->query($sql) !== TRUE) {
                    echo "Error al insertar la imagen en la base de datos.";
                }
            } else {
                echo "Error al subir la imagen.";
            }
        }
        echo "Imágenes subidas exitosamente. ";
    
?>