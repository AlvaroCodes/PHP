<?php
# Crear una estructura de almacenamiento que tenga el nombre de la 5 ciudades  y su temperatura media
# muestra la 3

$temperatura = array(array('Sevilla',40),array('Madrid',30),array('Jaen',38),array('Barcelona',34),array('Granada',32),array('Malaga',31));

/*
for ($i = 0; $i<=3; $i++){
    for ($j = 0; $j<=1; $j++){
        if ($i == 3){
            echo "$temperatura[$i][$j]";
        }
    }
}
*/


for ($i = 0; $i<=5; $i++){
   
        if ($i == 3){
           $n1 = $temperatura[$i][0];
           $n2 =  $temperatura[$i][1];
           echo "$n1 - $n2 º";
        }
 
}