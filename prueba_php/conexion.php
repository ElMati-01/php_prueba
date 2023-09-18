<?php

$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno){

    die('Lo siento, hubo un problema');

} else{
    
    $sql = "INSERT INTO usuarios (ID,nombre,edad) values (null,'sonia',30)";
    $resultado = $conexion->query($sql);

    if($conexion->affected_rows >=1){
        echo 'Filas agregadas: '.$conexion->affected_rows; 
    }
}

?>