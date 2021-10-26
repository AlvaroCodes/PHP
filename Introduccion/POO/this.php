<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        # Para selecionar propiedades 
       echo $this->nombre.' tiene '.$this->edad.' y es de '.$this->pais;
    }
}

$carlos = new Persona;
$carlos->nombre = 'Carlos Ramirez';
$carlos-> edad = 23;
$carlos-> pais = 'Mexico';

$carlos -> mostrarInformacion();
