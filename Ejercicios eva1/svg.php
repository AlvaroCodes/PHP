<!DOCTYPE html>
<html>
<head>
<title>
Ejercicio 13<!-- Cambiar la longitud de una linea -->
</title>
</head>
<body>
<p align="center">
<?php
 $longitud =rand(10,1000);
    echo "<p>Longitud: $longitud</p>";
    echo"<p>";
    echo "<svg version= '1.1' xmlns= 'http://www.w3.org/2000/svg'";
    echo" width='".$longitud."px' height='10px'>";
    echo "<line x1='1' y1='5' x2='$longitud' y2='5' stroke='black'stroke.width='10'/>";
    echo " </svg>";
     echo "</p>";
?>
</body>
</html>