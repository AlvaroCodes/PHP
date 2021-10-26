<?php
/*
==> Ejemplo #1 de como lo hariamos sin POO <==

$nombre = 'Carlos';
$edad = 23;
$pais = 'Mexico';

$nombre2= 'Alejandro';
$edad2 = 30;
$pais2 = 'Spain';

echo $nombre;
*/

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    # Crear metodos
    public function mostrarInformacion(){
        echo 'Hola mundo <br>';
    }
}

$carlos = new Persona;
# Para modificar y acceder a las propiedades de Personas -> 
$carlos->nombre = 'Carlos Ramirez';
$carlos-> edad = 23;
$carlos-> pais = 'Mexico';

echo $carlos->nombre . 'tiene'. $carlos-> edad. ' años.';

# Llamar al metodo
$carlos -> mostrarInformacion();


$alejandro = new Persona; 
$alejandro -> nombre = 'Alejandro';
$alejandro -> edad = 30;
$alejandro -> pais = 'Spain';