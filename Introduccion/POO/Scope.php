<?php

class usuario {
    # public: Se accede desde cualquier parte. 
    # protected: Se accede solo desde dentro de la clase o heredadas.
    # private: Solo desde la clase creada, no heredadas.
    public $nombre;
    protected $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this -> correo;
    }
}

class Miembro extends Usuario {
    public function mostrarCorreo(){
        # Se puede acceder porque esta en protected 
        return 'Este es el correo: '. $this->correo;
    }
}


$carlos = new Miembro ('Alvaro', 'Inventado@gmail.com');
echo $carlos -> mostrarCorreo();