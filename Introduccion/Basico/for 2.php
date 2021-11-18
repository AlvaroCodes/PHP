<?php

for ($i = 1; $i<=10;$i++){
    echo "Hola <br>";
}

$meses = array('Enero', 'Febrero', 'Marzo', 
'Abril', 'Mayo', 'Junio', 
'Julio', 'Agosto', 'Septiembre', 
'Octubre','Noviembre','Diciembre');

for ($i = 0; $i<count($meses);$i++){
    echo $meses[$i].'<br>';
}

?>