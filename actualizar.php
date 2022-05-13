<?php
$respuesta = [];
$mysqli = new mysqli("localhost", "root", "", "proyecto2");

$sentencia = "  UPDATE 
                    estudiantes 
                SET 
                    id = $_REQUEST[id],
                    nombre = '$_REQUEST[nombre]',
                    correo = '$_REQUEST[correo]'
                WHERE
                    id = $_REQUEST[id]";
if($mysqli->query($sentencia) == false){
    $respuesta['ejecuto'] = false;
    $respuesta['msg'] = $mysqli->error;
}else{
    $respuesta['ejecuto'] = true;
    $respuesta['id'] = $_REQUEST['id'];
}

echo json_encode($respuesta);

?>