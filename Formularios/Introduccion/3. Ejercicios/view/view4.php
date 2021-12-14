<?php
$n = (!empty($_GET['n']))?$_GET['n']:'';

if (!empty($n)) {

    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
}else{
    $contadorNumeros = 0;
    $numeroTexto = "";
}


function crearTabla ($array){

    echo "<table border = 1>";
   
    echo "<tr>";
    for ($i = 1; $i<=15;$i++){
        
        echo "<td>".$array[$i-1]."</td>";
               
     }
     echo "</tr>";

    echo "</table>"; 

    echo "<br>";
}



if ($contadorNumeros == 15) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
    $numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "


    crearTabla($numero);

    $ultimo =  $numero[14];
    unset($numero[14]);
    array_unshift($numero, $ultimo);


    crearTabla($numero);
   
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