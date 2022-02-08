<?php


abstract class Animal {
    private $nombre;
    private $sexo;
    private $color;
    
    public function __construct($nombre, $sexo, $color ) {
        $this->nombre = $nombre;
        $this->sexo = $sexo;
        $this->color = $color;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    public function getSexo() {
        return $this->sexo;
    }

    public function getColor() {
        return $this->color;
    }

    public function mostrarCaracteristicar(){
        echo 'Animal con Nombre: '.$this->nombre.' con sexo: '.$this->sexo.' con color: '.$this->color;
    }
    
    public function duerme() {
        echo "El animal esta duermiendo";
    }

    public function meMuevo(){
        echo 'El animal '.$this->nombre.' se mueve';
    }

    public function apareateCon($animal) {
        if (get_class($this) != get_class($animal)) {
            echo "Dos especies diferentes no se pueden aparear.";
        } else {
            if ($this->sexo == $animal->sexo) {
                echo "¿Pero que dices? ¿Como me voy a aparear con eso?";
            } else {
                echo "Ven que te coja.";
            }
        }
    }
}