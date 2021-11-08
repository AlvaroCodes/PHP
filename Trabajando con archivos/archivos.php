<?php

# para ver si existe un valor, devuelve true o false
$resultado = file_exists('documento.txt');
# var_dump($resultado);

if (file_exists('documento.txt')){
    echo "El archivo existe";
}else {
    echo "El archivo no existe";
}

echo '<br>';
# Para capturar el contenido del archivo
echo file_get_contents('documento.txt');

# Para escribir el archivo, Sobreescribe el archivo. 
# Para agregar contenido sin borrar FILE_APPEND 
# br para navegador, \n para consola
file_put_contents('documento.txt', "Hola Paco <br> \n ", FILE_APPEND);

# Convertir un archivo a un array, cada linea es un elemento del array
$archivo = file('documento.txt');

?>