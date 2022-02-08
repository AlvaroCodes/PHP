<?php

include_once 'Animal.php';

abstract class Mamifero extends Animal {
 
    public function soyMamifero() {
        echo "Soy un mamifero";
    }

    public function camina() {
        echo "Soy un mamifero que camina";
    }

}