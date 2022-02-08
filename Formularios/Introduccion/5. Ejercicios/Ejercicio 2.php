<?php
$n = (!empty($_GET['n']))?$_GET['n']:'';

if (!empty($n)) {

    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
}else{
    $contadorNumeros = 0;
    $numeroTexto = "";
}


$numero = [];
if ($contadorNumeros == 10) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
    $numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "


    print_r ($numero);

    
  
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<?php 

if (count($numero) != 10){
    echo '
<form action="">
    <input type="number" name ="n" autofocus>
    <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
    <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
    <input type="submit">
</form>';
}else {
    echo '<form action="">
        <label for="Posicion Inicial"></label>
        <input type="number" name="inicial">

        <label for="Posicion Final"></label>
        <input type="number" name="final">
  
    <input type="submit">
  
    
</form>';
}

?>




</body>
</html>