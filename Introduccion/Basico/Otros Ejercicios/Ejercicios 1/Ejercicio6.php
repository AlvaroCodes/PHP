<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <select name="prueba" id="prueba">
        <?php  
        # Mostrar 10 option con un bucle dentro de HTML
        
        for($i = 1; $i<=10; $i++){
           echo "<option value='$i'>$i</option>";
        }

        ?>
       
    </select>
</body>
</html>