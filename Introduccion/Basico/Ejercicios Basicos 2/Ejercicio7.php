<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>

    <style>
        table, tr,td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
     <?php 
    
    for($i = 1; $i<=10; $i++){
        echo "</tr>";
        for($j = 1; $j<=10;$j++){
            $r = $i * $j;
                echo "<td>$r</td>";
        }
        echo "</tr>";
    }
    
    ?>
    </table>
   
</body>
</html>