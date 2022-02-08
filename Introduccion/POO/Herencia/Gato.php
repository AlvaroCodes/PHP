<?php

include_once 'Mamifero.php';

class Gato extends Mamifero {
    public function maulla() {
        echo '<img src="gato1.jpg" alt="Gato maulla">';
    }
    
    public function triste() {
        echo '<img src="gato2.jpg" alt="Gato triste">';
    }
    
    public function pasea() {
        echo '<img src="gato3.jpg" alt="Gato triste">';
    }
}