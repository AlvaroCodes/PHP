<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    # Metodo constructor
    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
       echo $this->nombre.' tiene '.$this->edad.' y es de '.$this->pais;
    }
}

$carlos = new Persona('Carlos Ramirez', 24, 'Spain');

$carlos -> mostrarInformacion();
