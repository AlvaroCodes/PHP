<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
    
    <style>
        div {
            display: flex;
            justify-content: center;
        }
        
        h1{
            text-align: center;
            font-size: 200px;
        }
    </style>
</head>
<body>
	<?php 

$arryValores = [];
$arryValores[] = 'Uno';
$arryValores[] = 'Dos';
$arryValores[] = 'Tres';
$arryValores[] = 'Cuatro';
$arryValores[] = 'Cinco';
$arryValores[] = 'Seis';

    $dato1 = rand(1,6);
    echo "<div>";
        echo "<p><img src='../img/".$dato1.".svg' alt='Dado' width='240' height='240'></p>";
        echo "</div>";
        echo "<h1>".$arryValores[$dato1-1]."</h1>";
    ?>																	
</body>
</html>