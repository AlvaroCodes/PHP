<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
    
    <style>
    
         *{
            margin 0;
            padding 0;
            }
    
        rect{
            opacity: 0.2;
        }
        
        div {
            width: 100%;
        }
       
    </style>
    
</head>
<body>
 	<?php // Numeros aleatorios


echo "<br>";
     
$color = "rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")";
echo "<div>";

    $circulo = 45;
    $cuadrado = 1;
    $aleatorio = rand(1,6);
    echo   "<svg version='1.1' xmls=http://www.w3.org/2000/svg width='600' height='700'>";
    for ($i = 0; $i<=$aleatorio; $i++){
       
        echo "<circle  cx='45' cy='$circulo' r='40' fill='$color'/>";
        echo "<rect width='90' height='90'x='1' y='$cuadrado' style='fill: rgba(255, 0, 0, .5);stroke-width:3;stroke:rgb(0,0,0)' />";  

        $circulo = $circulo + 100;
        $cuadrado = $cuadrado + 100;
    }
     echo "</svg>";
     echo "</div>"
   
    ?>																	
</body>
</html>