<?php
$array = array();

for ($i = 1; $i<=20; $i++){
    $array[] = rand(0,100);
}

echo "<h1>Primer array</h1>";
echo "<pre>";
    print_r ($array);
echo "</pre>";


$cuadrado = array();
$cubo = array();
foreach ($array as $valor){
    $cuadrado[] = $valor * $valor;
    $cubo[] = ($valor * $valor) * 2;
}

echo "<h1>Cuadrado</h1>";
echo "<pre>";
    print_r ($cuadrado);
echo "</pre>";

echo "<h1>Cubo</h1>";
echo "<pre>";
    print_r ($cubo);
echo "</pre>";

