<?php
header("Content-type: text/html; charset=utf-8");
$EmailFrom = "jair@cipionhabla.me";
$EmailTo = "cipionhabla@gmail.com";
$Subject = "Formulario de contacto";
$user_name = Trim(stripslashes($_POST['user_name']));
$user_mail = Trim(stripslashes($_POST['user_mail']));
$user_message = Trim(stripslashes($_POST['user_message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $user_name;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $user_mail;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $user_message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, utf8_decode ($Body), "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=page-thanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=page-error.html\">";
}
?>
