<?php

$arrayAsociativo = [0 => 'Paco', 1 => 'María', 2 => 'Pedro'];
for ($i = 0; $i<count($arrayAsociativo); $i++){
    # ¿? Por que me pinta antes las ------ que el array ?¿
    echo $arrayAsociativo[$i]."<br>";
    echo "---------------";
    echo "<br>";
}

echo "<br>";
echo "<br>";

$array_asociativo_mujeres = [1 => "Lucía", 2 => "Juani", 10 => "Rosa"];
foreach($array_asociativo_mujeres as $valores){
    echo $valores."<br>";
    echo "------------------";
    echo "<br>";
}

echo "<br>";
echo "<br>";

$array_asociativo_mujeres[10] = "Belen";
echo $array_asociativo_mujeres[10];

$caractPersona = ["pelo Marron", "ojos Azules", "altura 175cm",6];