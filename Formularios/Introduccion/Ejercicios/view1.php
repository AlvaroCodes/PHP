<?php
$n = $_GET['n'];
$contadorNumeros = $_GET['contadorNumeros'];
$numeroTexto = $_GET['numeroTexto'];

if (!isset($n)) {
$contadorNumeros = 0;
$numeroTexto = "";
}

////////////////////////////////////////////////////////////////
// Programa principal una vez recogidos los datos del array.
// El array con los números es $numero
////////////////////////////////////////////////////////////////

if ($contadorNumeros == 10) {
$numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
$numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes del inicio vacio
$numero = explode(" ", $numeroTexto); //Devuelve un array de String eliminando "
$maximo = -PHP_INT_MAX;
$minimo = PHP_INT_MAX;
//Recorremos el array para buscar el maximo y minimo
foreach ($numero as $n) {
if ($n < $minimo) {
$minimo = $n;
}
if ($n > $maximo) {
$maximo = $n;
}
}
//Bucle para mostrar los numeros con su correspondiente maximo y minimo
foreach ($numero as $n) {
if ($n == $minimo) {
echo "$n minimo<br>";
} else if ($n == $maximo) {
echo "$n maximo<br>";
} else {
echo "$n<br>";
}
}
}
////////////////////////////////////////////////////////////////


// Pide número y añade el actual a la cadena
if (($contadorNumeros < 10) || (!isset($n))) {
?>
<form action="view1.php" method="get">
<input type="hidden" name="ejercicio" value="02">
Introduzca un número:
<input type="number" name ="n" autofocus>
<input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
<input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
<input type="submit" value="OK">
</form>
<?php
}