<?php
/* No me ha salido :( */
 $contador = 0;
for ($i = 1; $i<=5; $i++){
    $contador = $i;
    for ($j = 1; $j<=$i; $j++){
        if ($contador == 1){
            echo ($contador++)." ";
        } else {
            $contador = $contador + 1;
            echo ($contador++)." ";
        }
        
    }
    echo "<br>";
}
?>