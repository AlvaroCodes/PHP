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
       return $this->nombre.' tiene '.$this->edad.' y es de '.$this->pais;
    }
}

# herencia palabra reservada extends
class Estudiante extends Persona {
    # Se puede sobreescribir el objeto heredado llamando a ese metodo, variable, ...
    
    #Se crea el metodo constructor
    function __construct($nombre, $edad, $pais, $carrera){
        # Se hereda del hijo
        parent::__construct($nombre, $edad, $pais);
        # Añade el nuevo valor
        $this->carrera = $carrera;
    }
}

class Trabajador extends Persona {
    function __construct($nombre, $edad, $pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
}

$carlos = new Trabajador('Carlos Ramirez', 24, 'Spain', 'Profesor');
echo $carlos -> trabajo;