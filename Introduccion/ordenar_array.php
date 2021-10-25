<?php 
$meses = array('Enero', 'Febrero', 'Marzo', 
'Abril', 'Mayo', 'Junio', 
'Julio', 'Agosto', 'Septiembre', 
'Octubre','Noviembre','Diciembre');

$numeros = array(1,22,23,45,56,87,100,8,3,12);

# Con sort se puede ordenar un array de forma alfabetica. 
sort($numeros);
# Se ordena a la inversa
rsort($numeros);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
    <h1>Meses: </h1>
    <ul>
        <?php
            /*
            foreach($meses as $mes){
                echo '<li>'.$mes.'</li>';
            }
            */

            foreach($numeros as $numero){
                echo '<li>'.$numero.'</li>';
            }
        ?>
    </ul>
</body>
</html>