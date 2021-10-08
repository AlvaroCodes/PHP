<!DOCTYPE html>
<html lang="en">
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
	<?php // Numeros aleatorios
    $dato1 = rand(1,6);
    $dato2 = rand(1,6);
    $resultado = $dato1+$dato2;
    echo "<div>";
        echo "<p><img src='img/".$dato1.".svg' alt='Dado' width='240' height='240'></p>";
        echo "<p><img src='img/".$dato2.".svg' alt='Dado' width='240' height='240'></p>";
        echo "</div>";
        echo "<h1> $resultado</h1>";
    ?>																	
</body>
</html>