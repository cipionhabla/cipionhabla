<?php
header("Content-type: text/html; charset=utf-8");
$EmailFrom = "contacto@covi.com.co";
$EmailTo = "jair@covi.com.co";
$Subject = "Formulario de contacto";
$nombre = Trim(stripslashes($_POST['nombre']));
$correo = Trim(stripslashes($_POST['correo']));
$asunto = Trim(stripslashes($_POST['asunto']));
$mensaje = Trim(stripslashes($_POST['mensaje']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $correo;
$Body .= "\n";
$Body .= "Asunto: ";
$Body .= $asunto;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, utf8_decode ($Body), "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
