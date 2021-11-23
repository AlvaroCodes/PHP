<?php 

$senama = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
# Para acceder a los valores:
echo $senama[0].'<br>';
echo $senama[1].'<br>';
# ...

# Agregar nuevos valores.
# Los Array soporta cualquier tipo de datos.
// $senama [7] = 1;
// $senama [8] = array('123');

# count () Nos dice el numero de elementos de un array
echo count ($senama).'<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana</title>
</head>
<body>
    <h1>Dias de la Semana</h1>
    <ul>
        <?php
        # --> foreach
        # Es una forma sencilla de recorrer un array
        # Primer parametro array a recorrer y el segundo como lo llama
            foreach($senama as $week){
                echo '<li>'.$week.'</li>';
            }

        ?>
    </ul>
</body>
</html>