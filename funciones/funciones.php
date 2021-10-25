<?php 

function saludo ($nombre){
    echo 'Saludo! '.$nombre;
}
saludo ('Alvaro');


function sumar ($num1, $num2){
    return $num1 + $num2;
}

echo '<br>';

$resultado = sumar(3,4);
echo 'Resultado de la suma: '.$resultado;
?>