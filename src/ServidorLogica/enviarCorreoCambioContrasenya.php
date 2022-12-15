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

    $contrasenya = $_POST['contrasenya'];
    $contrasenya_encriptada = hash('sha512', $contrasenya);

    $nuevaContrasenya=$_POST['nuevaContrasenya'];
    $nuevaContrasenyaEncriptada=hash('sha512', $nuevaContrasenya);

    $codigo= rand(1000,9999);
    //$codigo= 8888;
    $enlace="https://jmarzoz.upv.edu.es/src/ServidorLogica/RC/verificartoken.php?correo=".$correo."&codigo=".$codigo;

    $_POST['codigo']=$codigo;
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
        $mail->AddEmbeddedImage('../ux/assets/images/logo.png','Imagen Logo Aether','file/logo.png','base64','image/png');
        $mail->AddEmbeddedImage('../ux/assets/images/1280px-Logotipo_del_Ministerio_de_Sanidad,_Consumo_y_Bienestar_Social.svg.png','Imagen Logo Ministerio','file/1280px-Logotipo_del_Ministerio_de_Sanidad,_Consumo_y_Bienestar_Social.svg.png','base64','image/png');

        $mail->Body = "Entre en el siguiente enlace para CAMBIAR SU CONTRASEÑA: <br>".$enlace;

        $mail->send();
        echo '<script>
                alert("SE HA ENVIADO UN EMAIL A TU DIRECCIÓN DE CORREO ELECTRÓNICO");
                
            </script>';
        insertarCodigo($correo, $codigo);



        //header("location: ../ServidorLogica/RC/verificartoken.php?correo=".$correo."&codigo=".$codigo);

    } catch (Exception $e) {
        echo "Ha habido un error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
}
