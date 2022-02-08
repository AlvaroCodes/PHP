<?php 

$barajaEspañola = [];
$palos = ['Espadas', 'Copas', 'Oros', 'Bastos'];
for ($i = 1; $i<= 4; $i++){
    for ($j = 1; $j <= 12; $j++){
        array_push($barajaEspañola, "$j ".$palos[$i-1]);
    }
}

shuffle($barajaEspañola);


$miMano = [];
$puntuacion = 0; 

for ($i = 1; $i<=10; $i++){
    array_push($miMano, $barajaEspañola[$i-1]);
    $a = array_shift($barajaEspañola);
    
    $valor = substr($barajaEspañola[$i-1], 0, 2); 
    $valor = trim($valor);

    switch ($valor){
        case '1': 
            $puntuacion+= 11;
        break;
        case '3': 
            $puntuacion+= 11;
        break;
        case '12':
            $puntuacion+= 4;
        break;
        case '11':
            $puntuacion+= 3;
        break;
        case '10':
            $puntuacion+= 2;
        break;
    }
   
    
   
}


foreach ($miMano as $key => $value) {
    echo $value." | ";
}

echo "<br> <br> Puntuacion:  $puntuacion";

?>