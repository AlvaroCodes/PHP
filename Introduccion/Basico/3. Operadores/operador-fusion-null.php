<?php

# Comprueba si tiene o no valor la variable $_GET['nombre']
# Si tiene un nombre guarda la variable, sino guarda anonimo. 
$nombre = $_GET['nombre']??'Anonimo';
echo $nombre;

?>