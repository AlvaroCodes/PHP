<?php

include_once 'Animal.php';

class Lagarto extends Animal {

    
    public function sacaLengua() {
        echo '<img src="lagarto1.jpg" alt="lagarto con lengua">';
    }

    public function sinLengua() {
        echo '<img src="LAGARTO2.jpg" alt="lagarto sin lengua">';
    }
    
   
}