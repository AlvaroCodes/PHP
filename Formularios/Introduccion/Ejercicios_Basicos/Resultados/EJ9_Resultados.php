<?php
$resultado = (!empty($_POST['radio']) && !empty($_POST['altura']))
? (M_PI * ($_POST['radio']**2)*$_POST['altura'])/3
:'Introduce los datos';
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
   echo (($resultado != 'Introduce los datos')? "<h2>El area del cono es: ".round($resultado, 2) ."</h2>":"<h2>$resultado</h2>");
    ?>
    <a href="../view/view9.php">Volver atrar</a>
</body>
</html>