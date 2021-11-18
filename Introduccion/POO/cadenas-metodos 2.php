<?php

class Usuario {
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this -> nombre = $nombre;
        $this -> correo = $correo;
    }

    public function mostrarNombre(){
        echo 'Su nombre es: '.$this->nombre.'<br/>';
        return $this;
    }

    public function mostrarCorreo(){
        echo 'Su correo es: '.$this->correo.'<br/>';
        return $this;
    }
}

$Alvaro = new Usuario ('Alvaro', 'Inventado@gmail.com');
# Encadenar metodos, es necesario el  return $this;
$Alvaro -> mostrarNombre() -> mostrarCorreo(); 