<?php
//SMTP send mail function
require_once('phpmailer/class.phpmailer.php');
// check if your path is correct, use ../ to go down one directory
$mail = new PHPMailer();
$mail->SMTPDebug = 1;
$mail->IsSMTP();
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = "587";
//usually the port for TLS is 587, for SSL is 465 and non-secure is 25
$mail->SMTPSecure = "tls";
//TLS, SSL or  delete the line
$mail->SMTPAuth = true;
$mail->Username = 'Jair Bedoya'
$mail->Password = 'oswaldo17'
$mail->From = 'jairbedoya06@gmail.com'
$mail->FromName = '';
$mail->AddAddress($to, $name);
if(!$mail->Send()) {
  echo 'Mailer error: '.$mail->ErrorInfo;
} else {
        echo("<p>Message successfully sent!</p>");
        echo "E-mail: ", $to, "<br />";
        echo "Name: ", $name, "<br />";
}
header('Location:mensaje-de-envio.html');
?>