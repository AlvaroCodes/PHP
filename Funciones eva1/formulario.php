<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos 2</title>
</head>
<body>
   <form method = 'POST'>
   	<h2>Introduce tu nombre.</h2>
   	<input type = "text" name="Nombre">
   	<input type = "submit" name="Enviar">
   </form>
   
   <?php 
        $nombre=$_POST['Nombre'];
        echo "<h3>Hola $nombre</h3>";
   ?>
   
</body>
</html>
