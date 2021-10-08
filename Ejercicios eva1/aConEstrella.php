<?php 



for ($i = 1; $i<=7; $i++){
    
    for ($j = 1; $j<=7; $j++){
      
        if (($i == 1) && ($j == 5)){
            echo "*";
        } else {
            echo "&nbsp;";
        }

        if (($j%3)== 0 && $i != 1 && $j != 1){
            echo ("*");
        } else {
            echo "&nbsp;";
        }

        if (($i == 5) && ($j != 1) &&  ($j != 2) &&  ($j != 3)&&  ($j != 5)  &&  ($j != 7) &&  ($j != 6)){
            echo "*";
        } else {
            echo "&nbsp;";
        }

    }

    
    echo "<br>";
   
}

?>