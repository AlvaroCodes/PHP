<?php 

// Para recoger y enviar el id por la URL
$id = $_GET['id'];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=practicafinal', 'root','');
   
    $statement = $conexion->prepare('SELECT * FROM clientes LIMIT 10');
    // $statement-> execute(array(':Codigo' => 'C0001'));
    // $statement-> execute(array(':Codigo' => $id));

    # fethAll
    $statement-> execute();

    # Se pueden agregar mas de un campo
    // $statement-> execute(array(':Codigo' => $id, ':nombre' => 'Alvaro'));

  /*
    $resultados = $statement->fetch();
    echo '<pre>';
        print_r($resultados);
    echo '</pre>';
*/

  # fetchAll devuelve todos los valores fetch solo uno
  $resultados = $statement->fetchAll();
 /*
  echo '<pre>';
      print_r($resultados);
  echo '</pre>';*/

  # Mostrar los datos
  foreach($resultados as $usuario){
      echo $usuario['Nombre'].'<br>';
  }



}catch (PDOException $e){
    echo "Error: ".$e->getMessage();
}
?>