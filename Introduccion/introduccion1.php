<?php
    $var = 'Ejercicio 1 de PHP';
    $var2 = 'Manual de PHP';
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var;?> - Pagina con Variables</title>
</head>
<body>
    <h3><?php echo $var;?></h3>
    <p>PHP es el mejor lenguaje del mundo para aprender desde cero.</p>
    <p><a href="https://www.php.net/">Quieres saber mas? Ver al <?php echo $var2?></a></p>
</body>
</html>