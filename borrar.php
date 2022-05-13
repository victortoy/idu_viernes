<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto2");
$sentencia = "DELETE FROM estudiantes WHERE id = ".$_REQUEST['id'];
if($mysqli->query($sentencia) == false){
    echo $mysqli->error;
};
?>