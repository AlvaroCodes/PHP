<?php 

$id = $_GET['id'];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=practicafinal', 'root','');
    echo 'La conexion se realizo con exito'; 

    $statement = $conexion->prepare('Select * From clientes where Codigo = :id');
    $statement-> execute(array(':id' => 5));

    #fetchAll devuelve todos los valores fetch solo uno
    $resultados = $statement->fetch();
    
    foreach($resultados as $fila){
        echo '<br>'.$fila['Nombre'];
    }

}catch (PDOException $e){
    echo "Error: ".$e->getMessage();
}
?>