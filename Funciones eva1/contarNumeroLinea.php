<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
</head>
<body>
 	<?php 

 	$file=basename($_SERVER['PHP_SELF']);
 	$numero_lineas = count(file($file));
 	
 	echo "Hay $numero_lineas en archivo $file";
 	
 	?>																	
</body>
</html>