
<?php
function mensajesArray ($chat){
    $archivo = file($chat);

    $mensajes = array();
    
    
    /*
    echo "<pre>";
        print_r ($archivo);
    
    echo "</pre>";
    */
    
    for ($i=0; $i<sizeof($archivo);$i++){
        $mensaje = array();
        $string = $archivo[$i];
    
        # Fecha
        $tok = strtok($string, "-");
        //echo $string."<br>";
    
        # Ver que es una fecha
        for ($j=0; $j<=9;$j++){
            $prueba = substr($tok,0,1);
    
            if ($prueba == $j){
                array_push($mensaje, $tok);
            }
            
        }
    
        $tok = strtok("-");
        $tok = trim($tok);
    
        $segundoMensaje = $tok;
        
        # Usuario
        $tok = strtok($segundoMensaje, ":");
        array_push($mensaje, $tok);
    
        # Mensaje
        $tok = strtok(":");
        array_push($mensaje, $tok);
    
        array_push($mensajes,$mensaje,);
    }

    

    return $mensajes;
}

    
