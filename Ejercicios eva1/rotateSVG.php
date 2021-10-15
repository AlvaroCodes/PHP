<html>

<head>

<title>

Ejercicio

</title>

<meta http-equiv='Content-Type' content='text/html ; charset=ISO-8859-1' />

</head>

<body>

<?php

$circulos = rand(1,10);

if ($circulos == 1) {

echo " <h2>$circulos circulo</h2>";

} else {

echo " <h2>$circulos circulos</h2>";

}

echo " <table border=1>";

print " <tr>\n";

for ($i = 0; $i < $circulos; $i++) {

echo " <td>\n";

echo " <svg version='1.1' xmlns='http://www.w3.org/2000/svg' width='70' height='70' font-size='45'>";

echo " <circle cx='35' cy='35' r='30' fill='hsl(" . rand(1, 360) . ", 100%, 50%)' />";

echo " <text x='35' y='50' text-anchor='middle' transform='rotate(" . rand(-80, 80) . " 35 35)'>" . rand(1, 9) . "</text>";

echo " </svg>";

echo " </td>";

}

echo " </tr>";
echo " </table>";

?>

</body>

</html>