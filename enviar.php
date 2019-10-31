<?php  

$destino="jairbedoya_17@hotmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

mail($destino, $carta, $contenido);
header('Location:mensaje-de-envio.html');

?>