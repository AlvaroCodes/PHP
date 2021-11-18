<?php
# Borra el archivo
file_put_contents('documento.txt','');
for ($i = 1; $i<=10; $i++){
    file_put_contents('documento.txt',"$i <br>", FILE_APPEND);
}
echo file_get_contents('documento.txt');

?>