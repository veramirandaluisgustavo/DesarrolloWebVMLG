<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
    $cadena1 = $_POST['cadena1'];
    $cadena2 = $_POST['cadena2'];
    $bandera = false;
    $cadena_encontrada="";
    $cadena_array=explode(" ",$cadena1);
    foreach ($cadena_array as &$valor){
        if($valor==$cadena2){
            $bandera=true;
            $cadena_encontrada=$valor;
        }
    }
    if($bandera){
        echo "La cadena que se encuantro con coincidencia es: ".$cadena_encontrada;
    }
    else{
        echo "No se encontraron cadenas coincidentes";
    }
    ?>

    
</body>
</html>



<!-- if (strpos($cadena1, $cadena2) !== false) {
        echo '<p>' . $cadena1 . ' contiene la palabra ' . $cadena2 . '</p>';
        // Quitar cadena2 de cadena1
        $cadena1 = str_replace($cadena2, '', $cadena1);
        echo '<p>' . $cadena1 . '</p>';
    } else {
        echo '<p>' . $cadena1 . ' no contiene la palabra ' . $cadena2 . '</p>';
    } -->