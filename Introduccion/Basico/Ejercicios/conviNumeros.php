<!--Escribir un programa que me de todas 
las posibles convinaciones de dos digitos-->


<?php
for ($i = 0; $i<99;$i++){
    $a = $i;
    $b = $i;
    
    echo($a." ".($b+1));
    echo("<br>");
    echo (($a+1)." ".($b));
    echo("<br>");
    echo("<br>");
}
