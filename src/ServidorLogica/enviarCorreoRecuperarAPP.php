<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
include './LogicaDelNegocio.php';

$mail = new PHPMailer(true);
$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {
    $correo = $_POST['correo'];
    $codigo= rand(1000,9999);
    //$codigo= 8888;
    $_POST['codigo']=$codigo;

    $enlace="https://jmarzoz.upv.edu.es/src/ServidorLogica/RC/verificartoken.php?correo=".$correo."&codigo=".$codigo;
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'technologiesaether@gmail.com';                     //SMTP username
        $mail->Password = 'ffrirtigvvmbhqhp';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

        //Recipients
        $mail->setFrom('technologiesaether@gmail.com', 'Aether');
        $mail->addAddress($correo);     //Add a recipient


        //Contenido del Correo
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'AETHER - Solicitud de Cambio de contraseña';
        $mail->Body = 'Tu codigo es: '.$codigo."\n Entre en el siguiente enlace para CAMBIAR SU CONTRASEÑA: ".$enlace;


        $mail->send();
        echo 'Se ha enviado correctamente';

        insertarCodigo($correo, $codigo);

        //header("location: ../ServidorLogica/RC/verificartoken.php?correo=".$correo."&codigo=".$codigo);

    } catch (Exception $e) {
        echo "Ha habido un error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
}
