<?php
/*
#1.- Para saber con que metodo se estan enviando los datos. 
# Se utiliza cuando solo se tiene un formulario. 

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo 'Se enviarion por get';
} else {
    echo 'Se enviarion por post';
}
?>
*/

# 2.- Segunda forma para saber si se han enviado los datos. 
# Se utiliza cuando en la misma pagina se tiene varios formularios. 

if (isset($_POST['submit'])){
    echo "Se han enviado los datos correctamente";
}
?>