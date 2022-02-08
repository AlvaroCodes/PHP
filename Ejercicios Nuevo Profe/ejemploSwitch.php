
<?php

$numero = 8;

# 0 3 8 o ninguno 

switch($numero){
    case 0:
        echo 0;
    break; 
        
    case 3:
        echo 3;
    break;

    case 8:
        echo 8;
    break; 

    default:
        echo "ninguno";
    break;
}

echo "<br>";

if ($numero == 0){
    echo 0;
}else if ($numero == 3){
    echo 3;
}else if ($numero == 8){
    echo 8;
}else {
    echo "ninguno";
}