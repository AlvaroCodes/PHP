<?php

$valores = array();

for ($i = 1; $i<=20; $i++){
    if ($i%2 == 0){
        $valores[] = $i;
    }
}

print_r ($valores);