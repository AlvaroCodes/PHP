<?php

include_once 'Mamifero.php';

class Perro extends Mamifero {

    public function ladra() {
        echo "Guau, guau";
    }
    
    public function soyMamifero() {
        parent::soyMamifero();
        echo "<br>Soy un mamifero en concreto un perro";
    }
    
    public function camina() {
        parent::camina();
        echo "Soy un perro y estoy andando";
    }
}