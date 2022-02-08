<?php


class Coche {
    public $color;
    public $tipo;
    public $precio;

    # Crear metodos
    public function mostrarColor(){
        echo  $this->color.' '.' <br>';
    }

    # Crear metodos
    public function mostrarTipo(){
        echo $this->tipo.' '.' <br>';
     }

     # Crear get
     public function getColor($color){
        $this-> color = $color;
    }
}

$coche1 = new Coche;
# Para modificar y acceder a las propiedades de Personas -> 
$coche1->color =  'rojo';
$coche1-> tipo = 'ford';
$coche1-> precio = '29$';

$coche1 -> mostrarColor();
