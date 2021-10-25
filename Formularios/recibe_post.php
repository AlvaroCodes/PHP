<?php 
# El $_POST es como un array, sus indice es el name del form. 
# No se puede acceder a esta pagina php.
# No se pasan los datos por URL, el metodo get si los pasa. 

# Con metodo POST se puede enviar archivos y para manejar informacion importante


if (!$_POST){
    header('Location: https://www.youtube.com/?reload=9');
}

    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];
    
    echo($nombre);


/* ==> Explicacion de lo de arriba, menos optimizada. 
if ($_POST){ #Si el usuario ha completado el formulario
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $year = $_POST['year'];
    $terminos = $_POST['terminos'];
    
    echo($nombre);

}else{
    # Si el usuario no ha completado el formulario o se dirige directamete
    # al archivo php
    header('Location: https://www.youtube.com/?reload=9');
}
*/


?>