<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba');

if ($conexion -> connect_errno){
    die('Lo siento hubo un problema con el servidor');
} else {
    $statement = $conexion->prepare ("INSERT INTO usuarios(id,nombre,edad) VALUES(?,?,?)");
    
    # brind_param -> Valores a sustituir en la query
    /* 
    -> Primer parametro
    Se tiene que decir el tipo de valor por ?

    Para string => s
    Para integer => i
    Para double => d
    
    */

    $statement->bind_param('ssi', $id, $nombre, $edad); 
    $id = NULL;

    if(isset($_GET['Nombre']) && isset($_GET['Edad'])){
        $nombre = $_GET['Nombre'];
        $edad = $_GET['Edad'];
    }

    $statement ->execute();
}