<?php
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

foreach ($pais as $indice2 => $valores){
    echo $indice2.": <br>";
    foreach($valores as $indice => $valor){
        echo "$indice: $valor <br>";
    }

    echo "<br>";
}