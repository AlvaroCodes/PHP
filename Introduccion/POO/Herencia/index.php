<header class='dentroEjer flow-text center-align'>
  <h4>Ejercicio 2</h4>
  <p>Granja de animales</p>
</header>
<article class='dentroEjer'>
<?php
  include_once 'Gato.php';
  include_once 'Perro.php';
  include_once 'Canario.php';
  include_once 'Pinguino.php';
  include_once 'Lagarto.php';
  
  $perri = new Perro('Perro', 'hembra', 'Marron');
  $cati = new Gato('Gato', 'hembra', 'Gris');
  $garfield = new Gato('garfield', 'Macho', 'Naranja');
  $cantaor = new Canario('cantaor', 'Macho', 'Amarrillo');
  $bailaor = new Pinguino('bailaor', 'Macho', 'Blanco');
  $alSolano = new Lagarto('alSolano', 'Macho', 'Verde');
  
  echo "<h1>Animales</h1>";
  echo "<h2>Soy un perro</h2>";
  echo "<br>" . $perri->getNombre() . ": ";
  $perri->ladra();

  echo "<h2>Soy un gato</h2>";
  echo "<br>" . $cati->getNombre() . ": ";
  $cati->triste();
?>
</article>