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
            width: 600px;
        }
       
    </style>
    
</head>
<body>
 	<?php // Numeros aleatorios

    $aleatorio = rand(1,6);
    echo "<p><img src='img/".$aleatorio.".svg' alt='Dado' width='240' height='240'></p>";
    $a =  $aleatorio;
    
    $circulo = (($a-1) * 100) + 45;
   
     $color = "rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")";
   
     echo "<br>";
     
     echo "<div>";
     
     echo   "<svg version='1.1' xmls=http://www.w3.org/2000/svg width='600' height='150px'>";
     echo    "<circle  cx=' $circulo' cy='45' r='40' fill='$color'/>";
             
     echo "<text x='42' y='50' style='font-family: Consolas'>1</text>";
     echo "<rect width='90' height='90'x='0' style='fill: rgba(255, 0, 0, .5);stroke-width:3;stroke:rgb(0,0,0)' />";   
   
     echo "<text x='142' y='50' style='font-family: Consolas'>2</text>";
     echo "<rect width='90' height='90'x='100' style='fill: rgba(255, 0, 0, .5);stroke-width:3;stroke:rgb(0,0,0)' />";
    
     echo "<text x='242' y='50' style='font-family: Consolas'>3</text>";
     echo "<rect width='90' height='90'x='200' style='fill: rgba(255, 0, 0, .5);stroke-width:3;stroke:rgb(0,0,0)' />";
    
     
     echo "<text x='342' y='50' style='font-family: Consolas'>4</text>";
     echo "<rect width='90' height='90'x='300' style='fill: rgba(255, 0, 0, .5);stroke-width:3;stroke:rgb(0,0,0)' />";
     
    
     echo "<text x='442' y='50' style='font-family: Consolas'>5</text>";
     echo "<rect width='90' height='90' x='400' style='fill: rgba(255, 0, 0, .5);stroke-width:3;stroke:rgb(0,0,0)' />";
    
    
     echo "<text x='542' y='50' style='font-family: Consolas'>6</text>";
     echo "<rect width='90' height='90' x='500'  style='fill: rgba(255, 0, 0, .5);stroke-width:3;stroke:rgb(0,0,0)' />";
     echo "</svg>";
     
     echo "</div>"
   
    ?>																	
</body>
</html>