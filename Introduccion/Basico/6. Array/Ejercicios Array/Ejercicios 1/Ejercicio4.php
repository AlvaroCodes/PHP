<?php
# Terminar el array Multidimensional con las provincias
$pais = array(
    "galicia" => array("galicia"),
    "asturias" => array("Oviedo"),
    "cantabria" => array("cantabria"),
    "pais vasco" => array("pais vasco"),
    "navarra" => array("navarra"),
    "la rioja" => array("la rioja"),
    "aragon" => array("Huesca", "Teruel", "Zaragoza"),
    "cataluña" => array("cataluña"),
    "andalucia" => array("Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"),
    "baleares" => array("Palma"),
    "Canarias" => array("Las Palmas", "Santa Cruz de Tenerife"),
    "Cantabria" => array("Santander"),
    "Castilla-La Mancha" => array("Albacete", "Ciudad Real", "Cuenca", "Guadalajara", "Toledo"), 
    "Comunidad Valenciana" => array("Alicante", "Castellón", "Valencia")
);

foreach ($pais as $valores){
    foreach($valores as $valor){
        echo "$valor <br>";
    }

    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

foreach ($pais as $indice => $valores){

    if ($indice == "andalucia"){
        echo "$indice: ";
        foreach($valores as $valor){
            echo "$valor ";
        }
        echo "<br>";
    }

    if ($indice == "Castilla-La Mancha"){
        echo "$indice: ";
        foreach($valores as $valor){
            echo "$valor ";
        }
        echo "<br>";
    }

    if ($indice == "Comunidad Valenciana"){
        echo "$indice: ";
        foreach($valores as $valor){
            echo "$valor ";
        }
        echo "<br>";
    }
}