<?php 
# https://www.php.net/manual/es/control-structures.switch.php
$mes = 'Enero';

switch($mes){
    case 'enero':
        echo "Feliz ano nuevo";
        break;
    case 'Diciembre':
        echo "Feliz navidad";
       break;
    default:
        echo "No es un mes";
        break;
}
?>