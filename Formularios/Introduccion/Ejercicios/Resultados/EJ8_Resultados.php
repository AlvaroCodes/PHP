<?php
$resultado = (!empty($_POST['horas']))?$_POST['horas'] * 12:'Introduce los datos';
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
    <?php 
   echo (($resultado != 'Introduce los datos')? "<h2>El total es: $resultado $</h2>":"<h2>$resultado</h2>");
    ?>
    <a href="../view/view8.php">Volver atrar</a>
</body>
</html>