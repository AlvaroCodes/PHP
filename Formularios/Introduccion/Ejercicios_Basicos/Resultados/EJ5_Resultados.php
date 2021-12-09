<?php
$resultado = (!empty($_POST['altura']) && !empty($_POST['ancho']))?$_POST['altura'] * $_POST['ancho']:'Introduce los datos';
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
     echo "<h2>El area del rectangulo es: $resultado</h2>";
   //echo ((!empty($resultado))? "<h2>El area del rectangulo es: $resultado</h2>":$resultado);
    ?>
    <a href="../view/view5.php">Volver atrar</a>
</body>
</html>