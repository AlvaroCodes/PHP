<?php

$cadena = "    Hola";
quitarEspacios($cadena);


function quitarEspacios($string){

    echo "<pre>";
        echo ($string."<br>");
    echo "</pre>";
   
    $string = ltrim($string);

    echo "<pre>";
        echo ($string."<br>");
    echo "</pre>";

}