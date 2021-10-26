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
            font-size: 4rem;
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

    
    echo "<div>";

    for ($i = 0; $i<6;$i++){
        echo("<h1>".$arryValores[$i]." -</h1>");
    }
        
        echo "</div>";

       
    ?>																	
</body>
</html>