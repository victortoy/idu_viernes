<?php
$respuesta = [];
$mysqli = new mysqli("localhost", "root", "", "proyecto2");

$sentencia = "INSERT INTO estudiantes (id,nombre,correo,fk_ciudades) 
                VALUES ($_REQUEST[id],'$_REQUEST[nombre]','$_REQUEST[correo]','$_REQUEST[fk_ciudades]')";
if($mysqli->query($sentencia) == false){
    $respuesta['ejecuto'] = false;
    $respuesta['msg'] = $mysqli->error;
}else{
    $respuesta['ejecuto'] = true;
}

echo json_encode($respuesta);

?>