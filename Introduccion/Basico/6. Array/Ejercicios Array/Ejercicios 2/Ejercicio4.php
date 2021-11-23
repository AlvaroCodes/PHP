<?php
$valores = ['Hola', 'Adios', 'Sol', 'Hola', 'Sol', 'Raton', 'Movil'];
$valores_no_duplicados = array_unique($valores);

echo "<pre>";
    print_r($valores_no_duplicados);
echo "</pre>";