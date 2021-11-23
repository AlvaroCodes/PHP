<?php

$x = 20;
while ($x >= 1){
    echo $x . '<br>';
    $x--;
}


$meses = array('Enero', 'Febrero', 'Marzo', 
'Abril', 'Mayo', 'Junio', 
'Julio', 'Agosto', 'Septiembre', 
'Octubre','Noviembre','Diciembre');

$contador = 0;
while($contador < count($meses)){
    echo $meses[$contador].'<br>';
    $contador++;
}

?>