<?php 

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

# Array Asociat.
$alejandro = array(
    'telefono'=> 49494930, 
'edad'=>20, 
'pais'=> 'España');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>forEach</h1>
    <ul>
    <?php

    // En este caso solo se podría mostrar el dato
    // ya que solo se almacena en meses el valor
    /*
        foreach($meses as $mes){
            echo '<li>'.$mes.'</li>';
        }
    */

    # Foreach para array Asociat.
    // Se puede mostrar el indice y los datos o solo uno de ellos. 
    foreach($alejandro as $dato => $valor){
        echo '<li>'.$dato.' : '.$valor.'</li>';
    }

    ?>
    </ul>
</body>
</html>