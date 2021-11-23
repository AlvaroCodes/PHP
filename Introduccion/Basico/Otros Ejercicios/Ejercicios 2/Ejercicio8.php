<?php
$array = array();

for ($i = 1; $i<=20; $i++){
    $array[] = rand(0,99);
}

echo "<h1>Primer array</h1>";
foreach ($array as $key => $value) {
    if ($key == 19){
        echo $value;
    }else {
        echo "$value -";
    }
  
}

echo "<h1>Segundo array</h1>";

array_unshift($array, $array[19]);
$ultimo = array_pop($array);

foreach ($array as $key => $value) {
    if ($key == 19){
        echo $value;
    }else {
        echo "$value -";
    }
  }