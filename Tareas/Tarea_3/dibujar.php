<?php
if (isset($_POST['dimension'])) {
    $dimension = $_POST['dimension'];
} else {
    header("Location: formulario.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tablero de Ajedrez</title>
    <style>
        table {
            border-collapse: collapse;
        }
        
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 18px;
            border: 1px solid black;
        }
        
        .white {
            background-color: white;
        }
        
        .black {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Tablero de Ajedrez</h2>
    <table>
        <?php for ($i = 1; $i <= $dimension; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= $dimension; $j++) : ?>
                    <?php $class = ($i + $j) % 2 == 0 ? "white" : "black"; ?>
                    <td class="<?php echo $class; ?>"><?php echo $i . "-" . $j; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <br>
    <a href="Ajedrez.html">Volver al formulario de ajedrez</a>
</body>
</html>
