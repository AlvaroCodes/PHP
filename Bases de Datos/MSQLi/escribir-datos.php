<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba');

if ($conexion -> connect_errno){
    die('Lo siento hubo un problema con el servidor');
} else {
    $sql = "INSERT INTO usuarios(id,nombre,edad) VALUES(null, 'Carlos', 23)";
    $conexion->query($sql);
}