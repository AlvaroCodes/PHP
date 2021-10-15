<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
    
    <style>
        div {
            display: flex;
            justify-content: center;
        }
        
        h1{
            text-align: center;
            font-size: 200px;
        }
    </style>
</head>
<body>
	<?php
    $maximo = 0;
    $veces = 0;
    echo "<div>";
        
    for($i = 0; $i<=rand(1,5);$i++){
        $dato1 = rand(1,6);
    
        echo "<p><img src='img/".$dato1.".svg' alt='Dado' width='240' height='240'></p>";
        
        if ($dato1>=$maximo){
            if ($maximo == $dato1){
                $veces++;
            
            }else {
                $veces = 0;
            }

            $maximo = $dato1;
        }
    }
        echo "</div>";

        echo "<h1>Maximo: ".$maximo." Veces: ".$veces."</h1>";
    ?>																	
</body>
</html>