<?php
if (isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    $cadenaInvertida = strrev($cadena);
} else {
    header("Location: formulario.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadena Invertida</title>
</head>
<body>
    <h2>Cadena Invertida</h2>
    
    <p>Cadena invertida: <?php echo $cadenaInvertida; ?></p>
    <br>
    <a href="invertir.html">Volver al formulario</a>
</body>
</html>
