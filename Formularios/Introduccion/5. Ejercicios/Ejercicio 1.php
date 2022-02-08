<?php
$n = (!empty($_GET['n']))?$_GET['n']:'';

if (!empty($n)) {

    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
}else{
    $contadorNumeros = 0;
    $numeroTexto = "";
}



if ($contadorNumeros == 8) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
    $numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "


    foreach ($numero as $key => $value) {
        echo ($value%2 == 0)?"<p style='color: red'> $value </p>":"<p style='color: green'> $value </p>";
    }
   
    echo "<p style='color: red'> Pares </p>";
    echo "<p style='color: green'> Impares </p>";
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<form action="">
    <input type="number" name ="n" autofocus>
    <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
    <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
    <input type="submit">
</form>



</body>
</html>