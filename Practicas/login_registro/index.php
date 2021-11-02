<?php 
session_start();
# no uso usuario porque ya lo utilizo para otra practica en el 
# servidor xampp
if (isset($_SESSION['users'])){

    print_r($_SESSION);
    //header('Location: contenido.php');
}else {
    header('Location: registrate.php');
}

?> 