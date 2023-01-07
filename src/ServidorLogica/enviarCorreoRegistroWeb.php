<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$mail = new PHPMailer(true);
$metodo = $_SERVER['REQUEST_METHOD'];

//comprobamos que el método sea POST
if($metodo=='POST') {
    $nombre = $_POST['nombre'];
    $nombreSinEspacios = str_replace(' ', '-', $nombre);
    $correo = $_POST['correo'];
    $contrasenya = $_POST['contrasenya'];
    $contrasenya_encriptada = hash('sha512',$contrasenya);

    //$codigo= 8888;
    $enlace="https://jmarzoz.upv.edu.es/src/ux/verificarRegistroUsuarioWeb.php?nombre=".$nombreSinEspacios."&correo=".$correo."&contrasenya=".$contrasenya_encriptada;

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


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'AETHER - Solicitud de Registro de Usuario';
        $mail->Body = 'Entra en el siguiente enlace para verificar tu usuario: '.$enlace;


        $mail->send();
        echo 'Se ha enviado correctamente';


       // header("location: ../ServidorLogica/RC/verificartoken.php?correo=".$correo."&codigo=".$codigo);

    } catch (Exception $e) {
        echo "Ha habido un error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
}else{
    echo "Error en la peticion. Se esperaba un POST.".http_response_code(400);

}
