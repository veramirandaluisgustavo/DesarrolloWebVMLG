<?php
$matriz = [
    ["numero"=>1, "nombreApellido"=>"Juan Perez", "edad"=>25, "materia"=>"SIS-256", "nota"=>83],
    ["numero"=>2, "nombreApellido"=>"Ricardo Luna", "edad"=>30, "materia"=>"SIS-258", "nota"=>70],
    ["numero"=>3, "nombreApellido"=>"Teresa Tomasa", "edad"=>26, "materia"=>"SIS-256", "nota"=>84],
    ["numero"=>4, "nombreApellido"=>"Favian Umbre", "edad"=>24, "materia"=>"SIS-258", "nota"=>70]
];

?>

<?php
$json = json_encode($matriz);

if ($json === false) {
    echo "Error al convertir la matriz a JSON";
} else {
    echo $json;
}
// $filas = count($matriz);
// $columnas = count($matriz[0]);

// for ($fila = 0; $fila < $filas; $fila++) {
//     for ($columna = 0; $columna < $columnas; $columna++) {
//         $elemento = $matriz[$fila][$columna];
//         echo "Fila $fila, Columna $columna: $elemento<br>";
//     }
// }
?>
