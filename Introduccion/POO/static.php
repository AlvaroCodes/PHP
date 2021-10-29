<?php

class Persona {
    # Static hace que todo pertenezca a la clase
    public static $dia = '7 de Septiembre';

    public static function saludo (){
        return 'Hola!';
    }
}

# Para llamar a la propiedad con static
echo Persona::$dia;
# Para llamar al metodo con static
echo Persona::saludo();

