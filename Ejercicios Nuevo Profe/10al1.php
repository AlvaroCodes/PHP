<?php
echo "<h3> For </h3>";
for ($i = 10; $i>=1; $i--){
    echo "$i <br>";
}

echo "<br>";

echo "<h3> While </h3>";
$contador = 10;
while($contador>=1){
    echo ($contador--)."<br>";
}