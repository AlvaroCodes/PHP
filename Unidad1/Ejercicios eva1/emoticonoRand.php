<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
    
    <style>
        span { 
       border: black 2px solid; 
       padding: 17px; 
       font-size: 320px;
       align:center;
        }
        
        h1 {
        align:center;
        margin: auto;
        }
        
    </style>


</head>
<body>
 	<h1>
 	<span>
 	<?php 
 	
 	$a = rand(128512,128525);
 	  echo ("&#".$a.";");
 	?>
 	</span>
 	</h1>													
</body>
</html>