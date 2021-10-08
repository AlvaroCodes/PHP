<?php 
    $a = 1; 
    $b = "2";
    $c = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1"/> 
    <title>Ver el nombre del archivo.</title>
    <style>
    
        div{  
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; 
            
           text-align: center;
           font-size: 1.3rem;
        }
        
       
        table, td {
        border: 1px solid #FFAE5D;
        text-align: center;
        padding: 10px; 
        background-color: #F5F5F5;
        } 
    </style>
</head>
<body>

<div>
<h1>Operadores</h1>

<p>$a = 1; $b = "2"; $c = 3;</p>

 	<table >
 		<tr>
 			<td>Operador</td>
 			<td>Operacion</td>
 			<td>Resultado</td>
 		</tr>
 		
 		<tr>
 			<td>+</td>
 			<td><?php echo "$a + $b"?></td>
 			<td><?php echo $a + $b?></td>
 		</tr>
 		<tr>
 			<td> <> </td>
 			<td> <?php echo "$a <> $b"?> </td>
 			<td><?php echo (($a <> $b)== true)? "True":"False";?></td>
 		</tr>
 		<tr>
 			<td> <=> </td>
 			<td><?php echo "$a <=> $b"?></td>
 			<td><?php echo (($a <=> $b)== true)? "True":"False";?></td>
 		</tr>
 		
 		
 		<tr>
 			<td> .= </td>
 			<td><?php echo "$b .= $c"?></td>
 			<td><?php echo $b .= $c?></td>
 		</tr>
 		
 		<tr>
 			<td> and </td>
 			<td><?php $b = "2"; echo ($b== true)? "True":"False"; echo " and ";  echo ($c== true)? "True":"False";?></td>
 			<td><?php echo (($a and $b)== true)? "True":"False";?></td>
 		</tr>
 		
 		<tr>
 			<td> or </td>
 			<td><?php $b = "2"; echo ($b== true)? "True":"False"; echo " or ";  echo ($c== true)? "True":"False";?></td>
 			<td><?php echo (($a or $b)== true)? "True":"False";?></td>
 		</tr>
 		
 		
 		<tr>
 			<td> & </td>
 			<td><?php echo "0101 & 0001"?></td>
 			<td><?php echo 0101 & 0001?></td>
 		</tr>
 		
 		<tr>
 			<td> | </td>
 			<td><?php echo "0101 | 0001"?></td>
 			<td><?php echo 0101 | 0001?></td>
 		</tr>
 		
 		<tr>
 			<td> ^ </td>
 			<td><?php echo "0101 ^ 0001"?></td>
 			<td><?php echo 0101 ^ 0001?></td>
 		</tr>
 		
 		<tr>
 			<td> << </td>
 			<td><?php echo "0101 << 0001"?></td>
 			<td><?php echo 0101 << 0001?></td>
 		</tr>
 		
 	</table>
</div>

																
</body>
</html>