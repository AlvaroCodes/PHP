<?php
$deportes = array(
    "futbol" => array("Sevilla", "Betis","Madrid"),
    "motos" => array("Repsol","Yamaha","Honda"),
    "baloncesto" => array("Betis", "Lakers","Madrid")
);

echo $deportes["futbol"][1];
echo "<br>";
echo $deportes["motos"][2];
echo "<br>";
echo $deportes["baloncesto"][0];

foreach ($deportes as $deporte){
    foreach ($deporte as $valores){
        echo "$valores ";
    }
    echo "<br>";
}