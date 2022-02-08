<?php
$array = array();

for ($i = 1; $i<=20; $i++){
    $array[] = rand(0,100);
}

echo "<h1>Primer array</h1>";
echo "<pre>";
    print_r ($array);   
    sort($array);
echo "</pre>";

echo "<h1>Maximo: ".$array[19]."</h1>";
echo "<h1>Minimo: ".$array[0]."</h1>";



