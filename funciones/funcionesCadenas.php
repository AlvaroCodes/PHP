<?php 

# https://www.php.net/manual/en/ref.strings.php

/* 
Para evitar que el usuario meta cósigo malicioso, 
el texto que se pasa no es interpretado por el navegador.

$texto = '<b>Hola</b> & "" ';
echo htmlspecialchars($texto);
*/

/*
Para quitar los espacios en blanco.
$texto = ' Hola ';
echo trim ($texto);

*/

/*
Nos dice los caracteres que tiene un string
$texto = 'Hola ';
echo strlen($texto);
*/

/*
substr($texto, caracter donde corta, Numero de caracteres que quieres cortar);
Empieza desde el valor 0

$texto = 'Hola ';
echo substr($texto, 1,2);
*/

/*
Para pasar el texto a mayusculas o minusculas

$texto = 'Hola ';
echo strtoupper($texto);
echo strtolower($texto);

*/

/*
Para encontrar la posicion de los caracteres.

$texto = 'Hola ';
echo strpos($texto, 'H');
*/
?>


