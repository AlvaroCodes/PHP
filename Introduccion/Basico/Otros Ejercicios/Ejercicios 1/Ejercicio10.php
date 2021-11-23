<?php 
# Capta por un input un numero y di si es primo o no 
$numero = (isset($_GET['numero'])?$_GET['numero']:0);
$resultado = "";

if ($numero == 0){
    echo "<h1>Escribe un numero</h1>";
}else {

    for ($i=2;$i<=$numero;$i++){
        if (($numero%$i == 0) and $numero != $i){
            $resultado = "No es primo";
            break;
        }else {
            $resultado = "Es primo";
            break;
        }
    }
}

echo $resultado;

 

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
    <form action="Ejercicio10.php">
        <input type="number" name="numero">
        <input type="submit">
    </form>
</body>
</html>