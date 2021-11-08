<?php 

include "palabras.php";

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>PDF</title>

       <style>

table{
    margin-top: -100px;
    width: 100% 
}

 tr,td{
    padding: 3px;
    border: 1px solid #000;
    font-size: 1.1rem;
    text-align: center;
}


header {
    width: 100%;
    display: flex;
}

header div p {
    font-size: 0.9rem;
    margin-top: -4px;
}

footer p {
    font-size: 0.9rem;
}



header img  {
  margin-top: -10px;
  margin-left: 400px;
  height: 100px;
  width: 300px;
}
       </style>
 
</head>
<body>

<header>

<div>
    <p>Dispone de 8 minutos.  Corrección:  A – [E / (n -1)].</p>
    <p>Nombre: Alvaro Ramirez | DNI: 2xxxx5C</p>
    <p>Correo: arxxxxx98@gmail.com</p>
    <p>Direccion: Jeronimo Hernandez 1x</p>
</div>

<div></div>
    <img src="https://41basica.es/wp-content/uploads/2020/11/orto.jpeg" alt="Foto, logo, header">
</header>



    <?php 
    
    for ($i = 0; $i<sizeof($palabrasTabla);$i++){
        echo "<p>".($i+1).". ".$palabrasTabla[$i]['palabraCorrecta']."<br>".$palabrasTabla[$i]['retroalimentacion']."</p>";
        echo "<hr>";
    } 

    
   
    
    ?>
   

 


    
<footer>
    <p>El presente material se encuentra asistido por derechos de autor. 41basica se reserva el derecho de interponer cuantas acciones legales 
        estime oportunas en defensa de los derechos de autor, reproducción y distribución del material. </p>
</footer>

</body>
</html>

<?php 

$html = ob_get_clean();



# Incluir (cargar) domPDF.
require_once './libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;


$dompdf = new Dompdf();




# Opcion para mostrar imagenes.
#1. Recupero la opcciones 
$options = $dompdf->getOptions();
#2. Habilito las opcciones
$options->set(array('isRemoteEnabled' => true));
#3. Vuelvo a cargar las opcciones 
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter');

# $dompdf->setPaper('A4','landscape'); // Poner en horizontal

# renderizar
$dompdf->render();

#imprimier y autodescarga
$dompdf->stream("nombreArchivo.pdf", array("Attachment"=>false));


?>