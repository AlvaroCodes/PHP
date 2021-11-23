<?php

$resultado = glob('*.php');
# $resultado = glob('*.{php,html,txt}', GLOB_BRACE); // Para agrebar varias extensiones
# Nos devuelve un array con todos los archivos 
# que tengan terminacion php

print_r($resultado);