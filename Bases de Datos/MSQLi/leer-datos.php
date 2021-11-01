<?php

$conexion = new mysqli('localhost', 'root', '', 'practicafinal');

if ($conexion -> connect_errno){
    die('Lo siento hubo un problema con el servidor');
} else {
    $sql = 'SELECT * FROM clientes LIMIT 10';
    $resultado = $conexion->query($sql);
    # Si le pasas variables a la QUERY es mejor usar los prepared statements

    if ($resultado->num_rows){
    /*
    -> Fetch_assoc realiza un salto a la siguiente fila
    echo '<pre>';
        var_dump($resultado->fetch_assoc());
        var_dump($resultado->fetch_assoc());
    echo '</pre>';
    echo $resultado->fetch_assoc()['Nombre'];
    */

    # Devuelve null si no encuentra resultado
    # Mientras haya resultado ejecuta codigo cuando no lo encuentra para
    while($fila = $resultado->fetch_assoc()){
        echo $fila['Nombre'].'  ---  '.$fila['Sexo'].'<br>';
    }

    }else {
        echo 'No hay datos';
    }
}