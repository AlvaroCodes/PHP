<?php 

$paises = array (
    'Mexico', 'España', 'Colombia', 'Alemania',
    'Argentina', 'Italia', 'Francia'

);

foreach($paises as $pais){
    # Lo que hace es salir del bucle, termina la ejecución
    if ($pais == 'Italia'){
        break;
    }

    # Salta al siguiente.
    if ($pais == 'Colombia'){
        continue;
    }
    echo $pais.'<br>';
}

?>