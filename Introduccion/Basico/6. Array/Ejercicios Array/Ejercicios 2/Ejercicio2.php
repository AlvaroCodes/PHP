<?php
$equipo = array(
    'Portero' => 'Pablo', 
    'Defensa Izq' => 'Juan', 
    'Defensa Der' => 'Alfonso', 
    'Medio campo' => 'Maria', 
    'Delantero' => 'Carla'
);

foreach ($equipo as $posicion => $jugador){
    echo "$posicion: $jugador <br>";
}