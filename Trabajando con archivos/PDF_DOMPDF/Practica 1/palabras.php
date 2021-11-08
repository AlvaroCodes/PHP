<?php
    include "../conexion.php";
    $palabrasTabla = palabraAleatoria();
    $soloPalabra = palabras($palabrasTabla);
    $soloResultado = resultados($palabrasTabla);
    $solopalabraCorrecta = palabraCorrecta($palabrasTabla);

function palabras($tablaPalabras){

    $soloPalabra = array();

    for ($i = 0; $i < sizeof($tablaPalabras); $i++){
       $j = $tablaPalabras[$i]['palabra']."<br>";
       array_push($soloPalabra, $j);
    }

    return $soloPalabra;
}

function resultados($tablaPalabras){

    $soloResultado = array();

    for ($i = 0; $i < sizeof($tablaPalabras); $i++){
       $j = $tablaPalabras[$i]['resultado']."<br>";
       array_push($soloResultado, $j);
    }

    return $soloResultado;
}

function palabraCorrecta($tablaPalabras){

    $solopalabraCorrecta = array();

    for ($i = 0; $i < sizeof($tablaPalabras); $i++){
       $j = $tablaPalabras[$i]['palabraCorrecta']."<br>";
       array_push($solopalabraCorrecta, $j);
    }

    return $solopalabraCorrecta;
}

 

