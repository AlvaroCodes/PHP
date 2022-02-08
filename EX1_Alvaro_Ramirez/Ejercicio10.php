<?php
$sueldos = [
    0 => 500, 
    1 => 1550,
    2 => 2500,
    3 => 800,
    4 => 1400,
    5 => 1900
];

$edad = [
    0 => 28, 
    1 => 36,
    2 => 31,
    3 => 18,
    4 => 32,
    5 => 49
];

echo "<pre>";
    print_r ($sueldos);   
echo "</pre>";

for ($i = 0; $i<sizeof($sueldos); $i++){
    if ($sueldos[$i] >= 1000 && $sueldos[$i]<= 2000){

        /*
        if ($edad[$i]>45){
            $sueldos[$i] += $sueldos[i] * 0.3;
        }else {
            $sueldos[$i] += $sueldos[i] * 0.10;
        }
        */


        $sueldos[$i]+= ($edad[$i]>45)? $sueldos[$i] * 0.3:$sueldos[$i] * 0.10;

    } else if ($sueldos[$i] < 1000){

        if ($edad[$i]<30){
            $sueldos[$i] = 1100;
        }else if ($edad[$i]>=30 && $edad[$i]<=45){
            $sueldos[$i] += $sueldos[$i] * 0.3;
        } else if ($edad[$i]<45){
            $sueldos[$i] += $sueldos[$i] * 0.15; 
        }

    }
}


echo "<pre>";
    print_r ($edad);   
 
echo "</pre>";

echo "<pre>";
    print_r ($sueldos);   
  
echo "</pre>";