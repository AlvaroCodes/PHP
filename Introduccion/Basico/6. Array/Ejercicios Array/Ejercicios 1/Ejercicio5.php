<?php

$personas = array(
    array("Juan","Perez", "Sevilla"), 
    array("Paco", "Ramirez", "Jaen"),
    array("Alvaro","Ramirez", "Sevilla"),
    array("Gonzalo", "Gonzalez", "Londres"),
    array("Joaquin","Perez", "Cordoba")
);

echo $personas[0][1];
echo "<br>";
echo $personas[2][2];
echo "<br>";
echo $personas[2][0];
echo "<br>";

foreach ($personas as $persona){
    foreach($persona as $valores){
        echo "$valores -";
    }
    echo "<br>";
}