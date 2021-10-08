<!--Imprima del 1 al 30 y luego la suma total-->

<?php

$contador = 0;
for ($i=1; $i<=30; $i++){
    echo $i." ";
    $contador+=$i;
}

echo"<br>";
echo $contador;
?>