<?php

  include("class.phpmailer.php");
	 
//Creamos la instancia de la clase PHPMAiler
 $mail = new phpmailer();

//El método que usaremos es por SMTP
$mail->Mailer = "smtp";
// Los datos necesarios para enviar mediante SMTP
$mail->Host = "mail.piensaenespiral.com.mx";
$mail->SMTPAuth = true;
$mail->Username = "contacto@piensaenespiral.com.mx";
$mail->Password = "3spir4l";
// Asignamos el From y el FromName para que el destinatario sepa quien
// envía el correo
$mail->From = "contacto@piensaenespiral.com.mx";
$mail->FromName = "Mensaje desde WEB";
//Añadimos la dirección del destinatario
$mail->AddAddress('jorge@emprend.me');
//Asignamos el subject, el cuerpo del mensaje y el correo alternativo
$mail->Subject = "Comentario desde WEB";
$correo = $_POST['email']; 
$mensaje = $_POST['mensaje'];
$nombre = $_POST['nombre'];

$cuerpo = "Nombre:  ".$nombre. "                  ";
$cuerpo .= "Email: ".$correo. "                    ";
$cuerpo .= "Mensaje: ".$mensaje. "                  ";
 
$mail->Body = ($cuerpo);

if($mail->Send())
{
//Sacamos un mensaje de que todo ha ido correctamente.
echo "Mensaje enviado correctamente.";
}
else
{
//Sacamos un mensaje con el error.
echo "Ocurrió un error al enviar el correo electronico.";
echo "<br/><strong>Informacion:</strong><br/>".$mail-> ErrorInfo;
}

?>