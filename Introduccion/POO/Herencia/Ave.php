<?php

include_once 'Animal.php';

abstract class Ave extends Animal {
   
    
    public function avePia() {
        echo  '<img src="ave1.jpg" alt="Ave pia">';
    }
    
    public function aveSeReuneConOtro() {
        echo '<img src="ave2.jfif" alt="Ave con otro">';
    }
    
    public function vuela() {
        echo '<img src="ave3.jpg" alt="Ave con otro">';
    }
    
}