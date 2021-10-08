<!--
El perro de san roque no tiene rabo porque ramon ramirez se lo ha cortado.
Para conocer la longitud strlen()
Para coger un caracter se usa substr($string,numeroEmpi,NumeroCaracterCo)
-->

<?php
$frase = "El perro de san Roque no tiene rabo porque Ramon Ramirez se lo ha cortado.";

$contador = 0;
for($i = 0; $i<=strlen($frase); $i++){
    
    if (substr($frase,$i,1) == "r"){
        $contador++;
    }  
}
echo $contador;
?>