<?php
$n = (!empty($_GET['n']))?$_GET['n']:'';
$n = strtolower($n);


$palabras = ['perro' => 'Dog', 
            'gato' => 'Cat',
            'elefante' => 'Elephant', 
            'gallina' => 'Hen', 
            'hipopótamo' => 'Hippopotamus', 
            'jirafa' => 'Giraffe', 
            'caballo' => 'Horse', 
            'lechuza' => 'Owl', 
            'rana' => 'Frog', 
            'zorro' => 'Fox'];


foreach ($palabras as $key => $value) {
    echo "$key | ";
}

echo (!empty($_GET['n']))?"<h3>".$palabras[$n]."</h3>":'';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

<h1>Dicionario español - Ingles</h1>

<form action="">
    <input type="text" name ="n" autofocus>
    <input type="submit">
</form>



</body>
</html>