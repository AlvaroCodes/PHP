<?php
$frutas = array(
    'Manzana',
    'Pera',
    'Melocoton', 
    'Sandia', 
    'Pera', 
    'Manzana'
);

$frutas_2 = array(
    'Manzana',
    'Pera',
    'Melocoton', 
    'Sandia', 
    'Pera', 
    'Manzana'
);


echo "<pre>" ;
    $frutas_3 = array_merge($frutas,$frutas_2);
    print_r($frutas_3);
echo "</pre>";


echo "<pre>" ;
    $valores_no_duplicados = array_unique($frutas_3);
    print_r($valores_no_duplicados);
echo "</pre>";


echo "<pre>" ;
    arsort($valores_no_duplicados);
    print_r($valores_no_duplicados);
echo "</pre>";

