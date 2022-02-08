<?php
$array = array();
$keys = array();
$keys_5 = array();
$keys_0 = array();

for ($i = 1; $i<=20; $i++){
    $array[] = rand(0,5);
}
echo "<h1>Primer array</h1>";
echo "<pre>";
    print_r ($array);
echo "</pre>";

foreach($array as $key => $valor){
        $keys[] = $key;
}
echo "<h1>Primer array keys</h1>";
echo "<pre>";
    print_r ($keys);
echo "</pre>";


foreach($array as $key => $valor){
    if ($valor%5 == 0 && $valor != 0){
        $keys_5[] = $key;
    }
}

echo "<h1>Valores 5</h1>";
echo "<pre>";
    print_r ($keys_5);
echo "</pre>";

foreach($array as $key => $valor){
    if ($valor == 0){
        $keys_0[] = $key;
    }
}

echo "<h1>Valores 0</h1>";
echo "<pre>";
    print_r ($keys_0);
echo "</pre>";
