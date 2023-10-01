<?php
include 'calculadora.php';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operacion = $_GET['operacion'];

$calculadora = new Calculadora($num1, $num2);

$resultado = 0;

switch ($operacion) {
    case 'sumar':
        $resultado = $calculadora->sumar();
        break;
    case 'restar':
        $resultado = $calculadora->restar();
        break;
    case 'multiplicar':
        $resultado = $calculadora->multiplicar();
        break;
    case 'dividir':
        $resultado = $calculadora->dividir();
        break;
}

echo "<div>Resultado:</div>";
echo "El resultado es: $resultado";
?>
