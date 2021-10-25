<?php 

if ($_POST){
    echo $_POST['nombre'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <!--1. Una de las formas es dejar el compo action vacio (No recomendable) -->
    <!--2. Otra forma de hacerlo es poniendo el mismo nombre de la pagina  -->
    <!--3. Otra forma es coger la ruta de manera dinamica con PHP, pero tiene un problema de seguridad. 
    Pare evitarlo se usa la funcion htmlspecialchars() (RECOMENDABLE) -->
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="text" placeholder="Nombre:" name="nombre">
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <br>
        
        
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">

        <br>

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>

        <br>

        <label for="terminos">Aceptar los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">

        <br>
       
        <input type="submit" value="Enviar">
    </form>

</body>
</html>