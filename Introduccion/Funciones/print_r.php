<?php 
$texto = 'Carlos';
$numero = 10;
$numero2 = 5;
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asosiativo = array('nombre'=>'Carlos', 'edad'=>20);
$boleano = false;

# print_r nos muestra el valor, es util para los arrays 
# se pueden ver de manera sencilla, como está desglosado
# No es util para los de tipo boolean ya que true es 1 
# y false no muestra nada. 

echo '<pre>';
    print_r($arreglo_asosiativo);
echo '</pre>';
?>