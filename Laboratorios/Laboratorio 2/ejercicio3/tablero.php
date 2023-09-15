<?php

    $filas = $_GET["filas"];
    $columnas = $_GET["columnas"];
    $color = $_GET["color"];
    

    function generarTabla($filas, $columnas, $color) {
        switch($color){
            case "blanco":$color="ffffff";break;
            
        }
        echo "<table border='1'>";
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<td style='background-color: #ffffff; width: 50px; height: 30px;'></td>";
                } else {
                    echo "<td style='background-color: #$color; width: 50px; height: 30px;'></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }

   
    generarTabla($filas, $columnas, $color);

?>
