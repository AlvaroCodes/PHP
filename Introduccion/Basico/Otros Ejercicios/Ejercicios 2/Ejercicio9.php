<?php
$array = array();

$numeroPares = array();
$numeroImpares =  array();

for ($i = 1; $i<=20; $i++){
    $array[] = rand(0,100);
}


foreach ($array as $key => $value) {
   if ($value%2 == 0){
       $numeroPares[] = $value;
   }else{
       $numeroImpares[] = $value;
   }
}

sort($numeroPares);
sort($numeroImpares);


echo "<pre>";
    print_r ($numeroPares);   
 
echo "</pre>";

echo "<pre>";
    print_r ($numeroImpares);   
  
echo "</pre>";

$arrayFinal = array_merge($numeroPares,$numeroImpares);


echo "<pre>";
    print_r ($arrayFinal);   
  
echo "</pre>";