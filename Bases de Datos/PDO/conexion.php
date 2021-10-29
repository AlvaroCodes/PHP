<?php 

# Conexion a base de datos

try {
    # LocalHost se puede sustituir por 127.0.0.1
    $conexion = new PDO('mysql:host=localhost;dbname=prueba', 'root','');
    echo 'La conexion se realizo con exito'; 

    # capturar los errores. 
}catch (PDOException $e){
    echo "Error: ".$e->getMessage();
}


?>