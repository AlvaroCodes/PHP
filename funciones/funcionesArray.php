<?php 
# https://www.php.net/manual/es/ref.array.php

/*
Extrae los elementos de un array asociativo como si fueran variables 
separadas.

$alejandro = array('telefono'=> 49494930, 'edad'=>20, 'pais'=> 'España');
extract($alejandro); 
echo $telefono;
*/

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

/*
Extrae el ultimo elemento de un array y lo elimina

$ultimoMes = array_pop($meses);

foreach($meses as $mes){
    echo $mes;
}

*/

/* 

Nos muestra el array separado por los parametros que le pasemos
echo join (' - ', $meses);

*/

/*
Para saber el numero de elementos de un array
echo count($meses);
*/

/* 
Ordena el Array por orden alfabetico (String) o numero (int)

sort($meses);
rsort($meses); // Los invierte 
echo join(' - ',$meses);
*/

/*
Muestra el array invertido. 

array_reverse($meses);
echo join(' - ',$meses);

*/
?>