<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stilos.css">
</head>
<?php
$cantidad=$_GET['cantidad'];
$unidad=$_GET['unidad'];
$unidad2=$_GET['unidad2'];


function comvertir($cant1,$cant2,$num){
    switch($cant1){
        case "mm":break;
        case "cm":$num*=10;break;
        case "dc":$num*=100;break;
        case "m":$num*=1000;break;
        case "km":$num*=100000;break;
        default:echo"datos de destino incorrectos";
    }
    switch($cant2){
        case "mm":break;
        case "cm":$num*=0.1;break;
        case "dc":$num*=0.01;break;
        case "m":$num*=0.001;break;
        case "km":$num*=0.000001;break;
        default:echo"datos de origen incorrectos";
    }
    
    echo"<div>$num</div>";
    echo"<div>$cant2</div>";
}

?>
<body>
    <div class="Flex_container">
        <div class="borde">
            <div class="formulario">
                <div class="titulo">
                    RESULTADO
                </div>
                
                <div>
                    <?php

                    comvertir($unidad,$unidad2,$cantidad);
                    
                    ?>
                </div>
                
            </div>
            

        </div>


    </div>

</body>

</html>