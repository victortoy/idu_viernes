<?php
$respuesta = [];

$mysqli = new mysqli("localhost", "root", "", "proyecto2");

$sentencia = "SELECT 
                estudiantes.id,
                estudiantes.nombre,
                estudiantes.correo,
                ciudades.nombre AS nombreC
            FROM 
                estudiantes LEFT JOIN ciudades ON fk_ciudades = ciudades.id";

$resultado = $mysqli->query($sentencia);
while($fila = $resultado->fetch_assoc()){
    array_push($respuesta, $fila);
}
echo json_encode($respuesta);
?>