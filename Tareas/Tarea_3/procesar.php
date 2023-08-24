<?php
function PalabraMasLarga($cadena) {
    $palabras = explode(" ", $cadena);
    $palabraMasLarga = "";
    
    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
        }
    }
    
    return $palabraMasLarga;
}

if (isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    $palabraMasLarga = PalabraMasLarga($cadena);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Procesar</title>
</head>
<body>
    <?php if (isset($palabraMasLarga)) : ?>
        <h2>Palabra más larga</h2>
        <p>La palabra más larga es: <?php echo $palabraMasLarga ?></p>
    <?php else : ?>
        <p>No se ha ingresado una cadena.</p>
    <?php endif; ?>
    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
