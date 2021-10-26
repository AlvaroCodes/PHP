<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Ajedrez</title>

    <style>
        td{
            padding: 1rem;
        }
    </style>
</head>
<body>



<table border = "1">
    <?php
    for ($i = 1; $i <= 8; $i++){

        echo ("<tr>");
        for ($j = 1; $j <= 4; $j++){
            if (($i%2)==0){
                echo ("<td>"."</td>");
                echo ('<td style="background-color: black;">'.$i.'</td>');
            }else {
                echo ('<td style="background-color: black;">'.$i.'</td>');
                echo ("<td>"."</td>");
            }
          
        }
        echo ("</tr>");
    }
    ?>
</table>


    
</body>
</html>