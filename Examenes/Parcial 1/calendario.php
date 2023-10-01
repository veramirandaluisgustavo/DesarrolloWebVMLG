<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calendario_style.css">
    
</head>
<body>
    <?php
    
    
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];

       
    $mes_num=0;
    switch($mes){
        case "enero":$mes_num=1;break;
        case "febrero":$mes_num=2;break;
        case "marzo":$mes_num=3;break;
        case "abril":$mes_num=4;break;
        case "mayo":$mes_num=5;break;
        case "junio":$mes_num=6;break;
        case "julio":$mes_num=7;break;
        case "agosto":$mes_num=8;break;
        case "septiembre":$mes_num=9;break;
        case "octubre":$mes_num=10;break;
        case "noviembre":$mes_num=11;break;
        case "diciembre":$mes_num=12;break;
        default:echo("eroor en el mes selecionado");

    }
    $indice=1;
    $colores="style='background-color: #FDE9D9;'";
    $fecha="";
    $anio_str="$anio";
    $mes_str="$mes_num";
    $fecha.=$anio_str;
    $fecha.="-";
    $fecha.=$mes_str;
    $fecha.="-18";
    // Utiliza la función date con "w" para obtener el día de la semana en formato numérico
    $numeroDiaSemana = date("w", strtotime($fecha));

    //inicio de la semana
    $primer_dia_semana =$numeroDiaSemana;

    //dias para el mes
    $ultimo_dia_mes = 31
    ?>

    <div class="fecha">Mes: <?php echo $mes; ?></div>

    <table >
        <tr class="dias">
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
            <th>Domingo</th>
        </tr>
        <tr>
            <?php
            
            
            for ($i = 1; $i < $primer_dia_semana; $i++) {
                echo '<td ';if($indice<8){
                    $indice++;
                    echo $colores.'></td>';}

                else{
                    $indice++;
                    echo'></td>';
                    if($indice==15)$indice=1;
                }
            }

            
            for ($dia = 1; $dia <= $ultimo_dia_mes; $dia++) {
                echo '<td ';if($indice<8){
                    echo $colores.'>' . $dia . '</td>';
                    $indice++;
                }
                else{
                    echo '>' . $dia . '</td>';
                    $indice++;
                    if($indice==15)$indice=1;
                }

                
                if (($dia + $primer_dia_semana - 1) % 7 == 0) {
                    echo '</tr><tr>';
                }
            }

            
            while (($dia + $primer_dia_semana -1) % 7 != 0) {
                echo '<td ';if($indice<8){
                    echo $colores.'></td>';
                    $indice++;
                }
                $dia++;
            }
            ?>
        </tr>
    </table>
</body>
</html>
