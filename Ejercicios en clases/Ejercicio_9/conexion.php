<?php
$conex = new mysqli("localhost","root","","alumnos",3308);
if($conex){
    echo"conexion exitosa";

}
else{
    echo"Conexion fallida";
}

?>