<?php

$valores = array();
for ($i = 1; $i<=10;$i++){
    $valores[] = rand(1,10);
}

valor10 ($valores);

foreach ($valores as $valor){
   
        echo "$valor <br>";
     
}

function valor10 ($valores){
    if (array_search(10,$valores)){
        echo "Contiene el valor 10 <br>";
    } else {
        echo "No contiene el valor 10 <br>";
    }
}

/*
# Se puede hacer sin el metodo array_search
function valor10 ($valores){
    foreach ($valores as $valor){
        if ($valor == 10){
            echo "Contiene el valor 10";
            break;
        }
    }
}
*/