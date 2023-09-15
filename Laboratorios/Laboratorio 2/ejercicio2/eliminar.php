<?php


function eliminarMayores($arreglo, $parametro_mayor) {
    $resultado = [];
    foreach ($arreglo as $numero) {
        if ($numero <= $parametro_mayor) {
            $resultado[] = $numero;
        }
    }
    return $resultado;
}


?>
