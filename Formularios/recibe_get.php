<?php 
# Get. Recibir informacion por URL. 
# El usuario puede enviar informacion cambiando los datos en la URL.
# Get es muy peligroso, se tiene que utilizar con mucho cuidado. 

if (!$_GET){
    header('Location: https://www.youtube.com/?reload=9');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

echo($nombre);


# Si el usuario no pone un campo, da error. Solucion:
if (!$nombre){
    echo 'No has introducido un nombre';
}
/*

Para evitar que inyecten codigo se puede usar 
el metodo htmlspecialchars($variable);

*/
?>