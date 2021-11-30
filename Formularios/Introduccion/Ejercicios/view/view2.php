<?php

# Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se deverá introducir por teclado.
$pesetas = (!empty($_POST['euros']))?(Integer)$_POST['euros'] * 166.386:'Introduce un numero';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
</head>
<body>
    <form action="../Resultados/EJ2_Resultado.php" method="post">
    
        <label for="euros">Euros: </label>
        <input type="number" name="euros">

        <br>
        <br>
      
        <input type="submit" value="Enviar Formulario">

        
        <br>
        <br>
        <br>
        <br>
    </form>

    <?php 
        echo $pesetas."<br>";
    ?>

<a href="../index.html">Volver atrar</a>
    
</body>
</html>