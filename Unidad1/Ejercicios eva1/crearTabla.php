<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border = "1">
    <?php
    for ($i = 0; $i <= 5; $i++){

        echo ("<tr>");
        for ($j = 0; $j <= 2; $j++){
            echo ("<td>".$i."</td>");
        }
        echo ("</tr>");
    }
    ?>
</table>


    
</body>
</html>

