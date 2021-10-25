<?php

/*
for ($i = 1; $i<=100; $i++){

    echo("<h1>Multiplo de ".$i."</h1>");

    for ($j = 1; $j<=$i; $j++){
        if (($i%$j)==0){
            echo ($j." ");
        }
    }
}*/

for ($i = 1; $i<=100; $i++){

  if (($i%3==0) && ($i%5==0)){
      echo ("$i Multiplo de 3 y 5 <br>");
  } elseif($i%3 == 0){
      echo ("$i Multiplo de 3 <br>");
  }elseif($i%5 == 0){
      echo ("$i Multiplo de 5 <br>");
  }else {
      echo ("$i <br>");
  }

}


?>