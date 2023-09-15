<?php

$numeroMayor=$_GET['parametro_mayor'];
$cantidad=$_GET['num_elementos'];
include "eliminar.php";

if (isset($numeroMayor) && isset($cantidad)) {
    $parametro_mayor = (int)$numeroMayor;
    $num_elementos = (int)$cantidad;
    
  
    $arreglo = [];
    for ($i = 0; $i < $num_elementos; $i++) {
        $arreglo[] = rand(1, 100); 
    }

   
    $resultado = eliminarMayores($arreglo, $parametro_mayor);

  
    echo "<div>Resultado:</div>";
    echo "<div>Parámetro Mayor: $parametro_mayor</div>";
    echo "<div>Arreglo Original: " . implode(', ', $arreglo) . "</div>";
    echo "<div>Arreglo Modificado: " . implode(', ', $resultado) . "</div>";
} else {
    echo "<div>Los parámetros no están configurados correctamente.</div>";
}
?>
