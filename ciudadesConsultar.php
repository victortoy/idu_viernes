<?php
$respuesta = [];

$mysqli = new mysqli("localhost", "root", "", "proyecto2");

$sentencia = "SELECT * FROM ciudades";

$resultado = $mysqli->query($sentencia);
while($fila = $resultado->fetch_assoc()){
    array_push($respuesta, $fila);
}
echo json_encode($respuesta);
?>