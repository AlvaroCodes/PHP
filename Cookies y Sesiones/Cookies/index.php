<?php 
# Archivos creado por el servidor que se guarda en las 
# computadoras, para cargar preferencias, ...

# setcookie ('Nombre', valor, time() + segundos * minutos * horas * dias, '/admin'); 
# con time () ... se establece la duracion de la cookie. 
# '/carpeta' donde se guarda la cookie, para que este disponible para todo el dominio "/"
setcookie('font-size', '40px', time() - 60 * 60 * 24 * 30, '/');

# Para eliminar una cookie se cambia el + por el -

# Solo puedes guardar 4MB de texto. 
# El usuario puede cambiarlas, no es segura. 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookie Seteada</h1>
    <a href="texto.php">texto</a>
</body>
</html>