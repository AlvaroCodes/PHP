<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con Variables</title>
</head>
<body>
 	<?php 
        echo "Tu usuario se ha conectado con ".$_SERVER['HTTP_USER_AGENT']; // Cabecera User / Agente.
                                              // El punto es una forma de concadenar. 
    ?>																
</body>
</html>