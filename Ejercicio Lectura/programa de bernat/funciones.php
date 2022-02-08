
<?php

function mostrarMensajesDias(){
    # Necesario Poner la primera fecha
    $fecha = "30/9/20";


    $fechas = mensajesDias ($fecha);


    for ($i=0; $i<sizeof($fechas);$i++){
        echo "<h3> El día ".$fechas[$i][1]." tiene ".$fechas[$i][0]." mensajes</h3>";
    
    }   
}


function mediaMensajesDia(){
      # Necesario Poner la primera fecha
      $fecha = "30/9/20";
      $fechas = mensajesDias ($fecha);
  
      $nMensajes = 0;
  
      for ($i=0; $i<sizeof($fechas);$i++){
        $n = intval($fechas[$i][0]);
        $nMensajes += $n;
      
      }   

      echo "<h3>La media de mensajes al día es de ".$nMensajes/sizeof($fechas)."</h3>";
}


function mediaMensajesDia365(){
    # Necesario Poner la primera fecha
    $fecha = "30/9/20";
    $fechas = mensajesDias ($fecha);

    $nMensajes = 0;

    for ($i=0; $i<sizeof($fechas);$i++){
      $n = intval($fechas[$i][0]);
      $nMensajes += $n;
    
    }   

    echo "<h3>La media de mensajes al día es de ".($nMensajes/365)."</h3>";
}

function diasConMasMensajes(){
    $fecha = "30/9/20";
    $fechas = mensajesDias ($fecha);

    # Ordena el array
    rsort($fechas);
    echo "<h3> El día ".$fechas[0][1]." tiene ".$fechas[0][0]." mensajes</h3>";

}


function usuariosCantidadMensajes (){
    $valores = usuariosMensajes();
    
    foreach ($valores as $posicion => $valor) {
        echo "<h3> Usuario: ".$posicion." mensajes: ".$valor."</h3>";
     }
}


function usuario_mas_mensajes(){
    $valores = usuariosMensajes();
    $valores2 = $valores;
    rsort($valores);

    foreach ($valores2 as $posicion => $valor) {
        if ($valores[0] == $valor){
            echo "<h3> Usuario: ".$posicion." mensajes: ".$valor."</h3>";
        }  
     }
}


function usuariosMensajes(){

    
    require 'importarMensajes.php';

    $mensajes = mensajesArray ('chat/chat.txt');
   
    $user = "";
    $contador = 1;
    
    $usuario = array();

   
    for ($i=0; $i<sizeof($mensajes);$i++){
        
        $userNew = $mensajes[$i][1];
        $nCaracteres = strlen($userNew);

            if ($nCaracteres <= 25 && $userNew > 0){


                array_push($usuario, $userNew);

            }    
    }

    $valores = array_count_values($usuario);
    return $valores;
}


function mensajesDias ($f){

    require 'importarMensajes.php';

    $mensajes = mensajesArray ('chat/chat.txt');

    $fecha = $f;
    $contador = 1;
    
    $date = array();
    $fechas = array();
    
    for ($i=0; $i<sizeof($mensajes);$i++){
       
        $string = $mensajes[$i][0];
        $fecha_sinHora = strtok($string, " ");
    
        $fecha_sinHora = trim ($fecha_sinHora);
    
       
        # 30/9/20 - 0
        # Comienzo fecha 
        # Tratar y quitar - 0
    
        if ($fecha != $fecha_sinHora){
    
            if ($fecha != ""){
                array_push($date, $contador);
                array_push($date, $fecha);
                array_push($fechas, $date);
        
                $date = array();
                $fecha = $fecha_sinHora;
                $contador = 1;
            }else {
                $date = array();
                $fecha = $fecha_sinHora;
                $contador = 1;
            }

        }else {
            
            $contador++;
        }
    }

    return  $fechas;
}
