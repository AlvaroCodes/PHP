<?php

$valores = array();

for ($i = 1; $i<=40; $i++){
    if ($i%2 != 0){
        $valores[] = $i;
    }
}

print_r ($valores);