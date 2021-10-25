<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- 
Atributos form:
    - action: Se especifica a donde enviar los datos
    - method: Existen dos metodos de envio.
        # POST.
        # Get. (Si no se agrega method por defecto es get).

Se accede a los datos con php por medio de name. El ID se usa para JS. 
-->    
    <form action="recibe_get.php" method="get">
        <input type="text" placeholder="Nombre:" name="nombre">
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <br>
        
        <!-- Para relacionar el label con el input el for y el id del input
             tienen que tener el mismo valor -->
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
        <!--Se usa el boton de submit para enviar los datos-->
        <input type="submit" value="Enviar">
    </form>

</body>
</html>