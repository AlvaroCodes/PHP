<?php
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


$palabrasAzar = [];
$palabrasAzar = $palabras;
shuffle($palabrasAzar);

$n1 = (!empty($_GET['n1']))?$_GET['n1']:'';
$n2 = (!empty($_GET['n2']))?$_GET['n2']:'';
$n3 = (!empty($_GET['n3']))?$_GET['n3']:'';
$n4 = (!empty($_GET['n4']))?$_GET['n4']:'';
$n5 = (!empty($_GET['n5']))?$_GET['n5']:'';



for ($i=0; $i < 4; $i++) { 
    echo ($palabras[$n1] == $palabrasAzar[$i])?
    "<p>".$palabras[$n1]."-".$palabrasAzar[$i]." es correcto</p>"
    :"<p>".$palabras[$n1]."-".$palabrasAzar[$i]." es incorrecto</p>";
}



print_r ($palabrasAzar);
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
    echo '<form action="">';
    for ($i=1; $i <= 5 ; $i++) { 
        echo "<label>".$palabrasAzar[$i-1]."  </label>";
        echo '<input type="text" "name ="'."n$i".'" autofocus>';
        echo "<br>";
      
    }

    echo '<input type="submit">';
    echo "</form>";
    ?>
</body>
</html>