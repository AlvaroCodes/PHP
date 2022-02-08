<?php

$numero = 10; 
$calculado = "";



echo "<table border = 1>";
echo "<tr>";
   
echo "<td>Info</td>";
echo "<td> Factorial </td>";
echo "<td> Calcular como </td>";
echo "<td> Imprime </td>";

echo "</tr>";


for ($i=1; $i<=$numero; $i++){

    $stringI = strval($i);
    $calculado .= $stringI . " * ";


    echo "<tr>";
   
    echo "<td>$i</td>";
    echo "<td>".factorial ($i)."</td>";
    echo "<td>".$calculado."</td>";
    echo "<td>".$i." · ".factorial ($i)."</td>";

    echo "</tr>";
 }


echo "</table>";


function factorial ($numero){
    $resultado = 1;
    for ($i=1; $i<=$numero; $i++){
       $resultado*=$i;   
    }
        return $resultado;
}