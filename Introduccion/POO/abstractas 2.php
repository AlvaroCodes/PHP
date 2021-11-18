<?php

# No se puede acceder a menos que la heredemos
abstract class Persona {

    public function saludo (){
        return 'Hola!';
    }
}

class Estudiante extends Persona {

}

$alvaro = new Estudiante;
echo $alvaro-> saludo();