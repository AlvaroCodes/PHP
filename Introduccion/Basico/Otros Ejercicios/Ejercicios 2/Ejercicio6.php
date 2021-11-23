<?php
$frutas = array("Platano","Melon","Sandia","Pera","Manzana","Pera");
$frutas2 = array("Platano","Melon","Sandia","Pera","Manzana","Pera");

echo "<h1>Unir array</h1>";
echo "<pre>" ;
    $frutas_3 = array_merge($frutas,$frutas2);
    print_r($frutas_3);
echo "</pre>";

echo "<h1>Quitar valores duplicados</h1>";
echo "<pre>" ;
    $valores_no_duplicados = array_unique($frutas_3);
    print_r($valores_no_duplicados);
echo "</pre>";

echo "<h1>Ordenar de menos a mayor</h1>";
echo "<pre>" ;
    sort($valores_no_duplicados);
    print_r($valores_no_duplicados);
echo "</pre>";

echo "<h1>Ordenar de mayor a menor</h1>";
echo "<pre>" ;
    arsort($valores_no_duplicados);
    print_r($valores_no_duplicados);
echo "</pre>";