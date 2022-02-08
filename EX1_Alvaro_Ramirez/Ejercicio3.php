<?php
$array = array();

for ($i = 1; $i<=10; $i++){
    $array[] = rand(0,100);
}

echo "<pre>";
    print_r ($array);
echo "</pre>";

sort($array);

echo "<pre>";
    print_r ($array);
echo "</pre>";