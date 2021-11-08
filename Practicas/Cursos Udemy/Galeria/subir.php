<?php
require 'funciones.php';

$conexion = conexion('galeria_practica','root','');

if (!$conexion){
    die();
}

# Con files puedes comprobar el tamaño de la todo
# El nombre de la foto, ...

# Comprobar que es una imagen
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    # @ para evitar error tipo NOTICE

    if($check !== false){
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino.$_FILES['foto']['name'];
        # Para subir la imagen
        move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);
    
        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) values (:titulo, :imagen, :texto)');
        $statement -> execute(array(':titulo'=>$_POST['titulo'],':imagen'=> $_FILES['foto']['name'],':texto'=> $_POST['texto']));
    
        header('Location: index.php');
    }else {
        $error = "El archivo no es una imagen o el archivo es muy pesado";
    }
}



require 'views/subir.view.php';

?>