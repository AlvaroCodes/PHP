<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
</head>
<body>
 	<?php // Numeros aleatorios
        echo "<p><img src='img/".rand(1,6).".svg' alt='Dado' width='240' height='240'></p>";
    ?>	
    
    <br>
    <br>
    <br>
    <?php // Numeros aleatorios
   
     $color = "rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")";
     echo "<p>Color: $color</p>";
     echo "<br>";
     echo "<p>";
     echo   "<svg version='1.1' xmls=http://www.w3.org/2000/svg";
     echo       "width='100' height='100'>";
     echo        "<circle cx='50' cy='50' r='50' fill='$color'/>";
     echo   "</svg>";
     echo "</p>";
   
    ?>																	
</body>
</html>