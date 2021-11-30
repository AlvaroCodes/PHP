<?php
# Realiza un  programa que pida dos números y luego muestre el resultado de su multiplicación.

$multiplicar = (!empty($_POST['n1']) && !empty($_POST['n2']))?(Integer)$_POST['n1'] * (Integer)$_POST['n2']:'Introduce los datos';
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
    echo "<h2>Multiplicación: $multiplicar</h2>";
    ?>
    <a href="../view/view1.php">Volver atrar</a>
</body>
</html>