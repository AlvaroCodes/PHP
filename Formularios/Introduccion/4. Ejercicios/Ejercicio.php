<?php
$n = (!empty($_GET['n']))?$_GET['n']:'';

if (!empty($n)) {

    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
}else{
    $contadorNumeros = 0;
    $numeroTexto = "";
}



if ($contadorNumeros == 10) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
    $numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "


    $arrayPrimos = array ();
    $arrayOtros = array ();
    $contador1 = 0;

    crearTabla($numero);

   for ($i = 1; $i<= 10; $i++){

    
    if ($numero[$i-1] == 1){
        array_push($arrayPrimos, $numero[$i-1]);
        $contador1 ++; //  Para saber cuantos 1 (por si lo pedia)  
    }

        for ($j = 2; $j<= $numero[$i-1]; $j++ ){

           
            
            if (($numero[$i-1]%$j == 0) and  $j != $numero[$i-1]){
                array_push($arrayOtros, $numero[$i-1]);
                break;
            }
            
            if ($numero[$i-1] == $j) {
                array_push($arrayPrimos, $numero[$i-1]);
                break;
            }
        }

   }


   $arrayResultado = array_merge($arrayPrimos, $arrayOtros);
   crearTabla ($arrayResultado);


}

function crearTabla ($array){

    echo "<table border = 1>";


    echo "<tr>";
    for ($i = 0; $i< count($array);$i++){
        echo "<td>".($i)."</td>";
      
               
     }
     echo "</tr>";
   
    echo "<tr>";
    for ($i = 0; $i< count($array);$i++){
        
        echo "<td>".$array[$i]."</td>";
               
     }
     echo "</tr>";

    echo "</table>"; 

    echo "<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

<form action="">
    <input type="number" name ="n" autofocus>
    <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
    <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
    <input type="submit">
</form>



</body>
</html>