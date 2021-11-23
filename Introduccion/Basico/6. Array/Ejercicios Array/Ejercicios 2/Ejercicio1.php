<?php

$arrayValores = array(1,2,3,4,5,6,7);
$multiplicador = 3;

foreach($arrayValores as $valores){
    echo "$valores x $multiplicador = ".$valores * $multiplicador.'<br>';
}