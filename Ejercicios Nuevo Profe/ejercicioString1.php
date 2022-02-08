<?php
# Crea una variable y asignales el valor "a-a-r-e-f-a" y muestrala por pantalla
# Muestra la longitud de la cadena
# Mostrar la mitad superior de la cadena 
# Cambiar todas las letras 'a' de la cadena por el valor 'tortuga'
# invertir el string
# volver a ordenarlo
# cambiar el caracter e por conejo 
# cambiar el caracter r por cabra
# cambiar el caracter f por vaca


$string = "a-a-r-e-f-a";
echo ("$string <br>");
$long = strlen($string);
echo ("$long <br>");
$x = $long/2;
$mitadSuperior = substr($string,0, (int)$x);
echo ("$mitadSuperior <br>");

$string = str_replace( "a", "tortuga", $string,);
echo "$string <br>";

$string = strrev($string);
echo "$string <br>";

$string = strrev($string);
echo "$string <br>";

$string = str_replace( "e", "conejo", $string,);
echo "$string <br>";


$string = str_replace( "-r-", "-cabra-", $string,);
echo "$string <br>";

$string = str_replace( "-f-", "-vaca-", $string,);
echo "$string <br>";
