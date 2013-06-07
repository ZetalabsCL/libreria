<?php

$Nombre = $_POST['name'];
$Email = $_POST['email'];
$celular = $_POST['celular'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $Nombre . ", y su Telefono es " . $celular . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date("d/m/y \a \l\a\s H:i:s ");

$para = 'contacto@libreria-acuarela.cl';
$asunto = 'Contacto desde el formulario web de Libreria Acuarela';

if (filter_var($Email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($para, $asunto, $mensaje, $header); //This method sends the mail.
echo '<div style-"color:green;>Tu mensaje fue enviado correctamente. Pronto nos contactaremos contigo!!"</div>'; // success message
}else{
echo "Los datos del formulario estan incorrectos, revisalos y vuelve a intentarlo";
}

?>