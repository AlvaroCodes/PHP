<?php
$array = ["Home", "Nosotros", "Productos", "Contacta"];

# Por que salta un espacio ¿?
echo "<ol>";
foreach ($array as $valores){
    echo "<li class='menu'> $valores <li>";
}
echo "</ol>";