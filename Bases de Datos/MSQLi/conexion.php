<?php

$conexion = new mysqli('localhost', 'root', '', 'practicafinal');

# Si aparece un 0 la conexion es correcta
echo $conexion -> connect_errno;

if ($conexion -> connect_errno){
    die('Lo siento hubo un problema con el servidor');
} else {
    // Codigo
}