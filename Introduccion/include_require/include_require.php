<?php 

function suma ($n1, $n2){
    return $n1 + $n2;
}

# Incluye el contenido de otro archivo php aquí. 
// Para archivos menos importantes
// include 'vista.php';

require 'vista.php';
// Para archivos importantes, es el más utilizado y recomendado
# La diferencia es que este nos da un fatal error y 
# no nos permite ejecutar el resto de la pagina. 


?>