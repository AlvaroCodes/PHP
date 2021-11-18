<?php
 $string = 'Hola me llamo alvaro';
 $x = 'alvaro';

 if ($j = strpos($string, $x)){

    echo "Se ha encontrado y esta en la posición: $j";

 }else {
     echo "No se ha encontrado";
 }