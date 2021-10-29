<?php 

if (isset($_COOKIE['font-size'])){
    # htmlspecialchars para proteger las inyecciones de codigo. 
    $tamano =   htmlspecialchars( $_COOKIE['font-size'] );
}else {
    $tamano = '10px';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        p {
            font-size: <?php echo $tamano;?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat fugit non odio quod assumenda omnis vel dolore provident inventore? Pariatur tenetur labore doloremque mollitia odio quos repellendus delectus ex nobis?</p>
</body>
</html>