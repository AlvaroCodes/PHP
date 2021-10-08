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
        $nombre_archivo = basename($_SERVER['PHP_SELF']);
        echo "Nombre del archivo: ".$nombre_archivo."<br>"; // El punto concadena. 
        
        $url = 'https://www.php.net/manual/es/reserved.variables.server.php';
        $url = parse_url($url);
        echo "Sheme: ".$url['scheme']."<br>"; // Es el protocolo
        echo "Host: ".$url['host']."<br>";
        echo "Path: ".$url['path']."<br>";
        
        if (!empty($_SERVER['HTTPS'])){
            echo "HTTPS está activa"."<br>";
        }else {
            echo "HTTP está activado"."<br>";
        }
    ?>																	
</body>
</html>