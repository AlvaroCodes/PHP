<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
</head>
<body>
 	<?php 

   $rd = getenv('DOCUMENT_ROOT');
   echo $rd."<br>";
   
   echo php_uname()."<br>";
   echo PHP_OS."<br>";
   if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
       echo "Este servidor esta usando Windows";
   }else {
       echo "No se que Sistema Operativo esta usando este servidor, no es Windows";
   }

   
   phpcredits(CREDITS_ALL - CREDITS_FULLPAGE); //Creadores PHP  
   
 	?>																	
</body>
</html>