<?php

include_once 'Ave.php';

class Pinguino extends Ave {
    public function feliz() {
        echo "Yuuuuuujuuuuuuuu, que divertidoooo";
    }
    
    public function pasea() {
        parent::avePia();
        echo "Yo no paseo, yo bailo<br>";
        self::baila();
    }
    public function vuela() {
        parent::vuela();
        echo "Yo no vuelo, yo bailo<br>";
        self::baila();
    }

}