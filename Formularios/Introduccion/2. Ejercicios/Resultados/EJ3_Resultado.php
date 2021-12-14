<?php

# Realiza un conversor de  pesetas a euros. Ahora la cantidad en euros que se quiere convertir se deverá introducir por teclado.
$euros = (!empty($_POST['pesetas']))?(Integer)$_POST['pesetas'] / 166.38:'Introduce un numero';
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
        echo $euros."<br>";
    ?>
    <a href="../view/view3.php">Volver atrar</a>
</body>
</html>