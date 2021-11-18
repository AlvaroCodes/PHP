<?php 
# Se agrega en todas las paginas que quieras utilizar sesiones.
# Si se cierra el navegador, se pierde la sesion. 
# Para que no se cierre se utiliza las cookies. 

session_start();

$_SESSION['nombre'] = 'Carlos';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Pagina de Inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir a la pagina dos</a>
</body>
</html>