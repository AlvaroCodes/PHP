<?php 

# Usando la base de datos del CRUD de JAVA del año pasado :)
# Son querys basicas (usuario no puede modificar la consulta) sino los prepared statements son mas seguras. 

try {
    $conexion = new PDO('mysql:host=localhost;dbname=practicafinal', 'root','');
    echo 'La conexion se realizo con exito'; 

# TABLA CLIENTES CON MAS DE 2000 REGISTROS por eso utilizo Limit
# Al igual quew se pueden hacer select, se pueden hacer insert, ... 
  $resultados = $conexion -> query('SELECT * FROM clientes LIMIT 10');

  foreach ($resultados as $fila) {
      /*
      echo print_r($fila);
      # ver codigo fuente de la pagina. 
      # Las filas se dividen en arrays. */

      echo '<br>'.$fila['Nombre'];
  }


}catch (PDOException $e){
    echo "Error: ".$e->getMessage();
}
?>