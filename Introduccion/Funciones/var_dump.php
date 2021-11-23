<?php 

$texto = 'Carlos';
$numero = 10;
$numero2 = 5;
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asosiativo = array('nombre'=>'Carlos', 'edad'=>20);
$boleano = false;

# Nos dice el valor (tipo, caracteres o digitos que tiene, ...)
# Con la etiqueta pre lo desplega en html
echo '<pre>';
    var_dump($arreglo_asosiativo);
echo '</pre>';
?>