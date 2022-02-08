<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){

        $carpeta_destino = 'chat/';
        $archivo_subido = $carpeta_destino.$_FILES['chat']['name'];
        move_uploaded_file($_FILES['chat']['tmp_name'],$archivo_subido);
        
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Wasa</title>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']);?>">
        
   
    <p>Tiene que ser un archivo .txt llamado chat</p>
        <label for="chat">Selecciona tu archivo</label>
        <input type="file" id="chat" name="chat">

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error;?></p>
        <?php endif ?>


        <input type="submit" class="submit" value="Subir archivo">
    
    </form>

<br>
<br>

<a href="mostrarMensajesDias.php">
    <button>Mostrar Mensajes por Dia</button>
</a>

<br>
<br>


<a href="mediaMensajesDia.php">
    <button>Media de mensajes por dias</button>
</a>

<br>
<br>

<a href="mediaMensajesDia365.php">
    <button>Media de mensajes por dias (365)</button>
</a>

<br>
<br>

<a href="diasConMasMensajes.php">
    <button>Dia con mas mensajes</button>
</a>

<br>
<br>

<a href="usuariosCantidadMensajes.php">
    <button>Mensajes por Usuarios</button>
</a>
    

<br>
<br>

<a href="usuario_mas_mensajes.php">
    <button>Usuarios con mas mensajes</button>
</a>

</body>
</html>