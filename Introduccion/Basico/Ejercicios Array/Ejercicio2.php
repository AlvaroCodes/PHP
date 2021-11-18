<?php
$alturasPrimero = [164,178,169,182];

$alturasSegundo = array();
$alturasSegundo[0] = 164;
$alturasSegundo[1] = 178;
$alturasSegundo[2] = 169;
$alturasSegundo[3] = 182;

echo "La altura de la posicion 0 es ".$alturasSegundo[0]." y la de la posicion 2 es ".$alturasSegundo[2];

echo "<br>";
echo "<br>";

$alturasSegundo[2] = 178;
echo $alturasSegundo[2];

echo "<br>";
echo "<br>";

$alturasSegundo[] = 189;
echo $alturasSegundo[4];

echo "<br>";
echo "<br>";

for ($i = 0; $i< count($alturasSegundo); $i++){
    echo $alturasSegundo[$i]." ";
}

echo "<br>";
echo "<br>";

unset($alturasSegundo[2]);
echo $alturasSegundo[2];

echo "<br>";
echo "<br>";

echo $alturasSegundo[3];

echo "<br>";
echo "<br>";


for ($i = 0; $i<count($alturasSegundo); $i++){
    echo $alturasSegundo[$i]." ";
}