<?php
$n = (!empty($_GET['n']))?$_GET['n']:'';

if (!empty($n)) {

    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
}else{
    $contadorNumeros = 0;
    $numeroTexto = "";
}

$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
$img;

if ($contadorNumeros == 12) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
    $numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "




   

   echo "<table border = 1>";
   
      
   for ($i = 1; $i<=12;$i++){
       echo "<tr>";
       
        for ($j = 1; $j<=2; $j++){


            if ($j == 1){
                echo "<td>".$meses[$i-1]."</td>";
                $img = '';
            }else {
                echo "<td>";
                for ($x = 1; $x<=$numero[$i - 1]; $x++){
                    $img.= '<img src="cuadradoVerde.png" alt="cuadrado">';
                }

                echo $img." ".$numero[$i-1]." C ";
                echo "</td>";
            }

         
        }
   
       echo "</tr>";
   }
   
   
   
   echo "</table>"; 
   







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