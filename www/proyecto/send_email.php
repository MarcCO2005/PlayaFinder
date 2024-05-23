<?php
// Cargar la clase PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluye los archivos de PHPMailer si lo instalaste manualmente
// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

// Si usaste Composer para instalar PHPMailer, carga el autoloader
require '../vendor/autoload.php';

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturar datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $privacyPolicy = isset($_POST['privacyPolicy']) ? 'Aceptada' : 'No aceptada';

try {
    // Configuración del servidor
    $mail->isSMTP();                                            // Enviar usando SMTP
    $mail->Host       = 'smtp.gmail.com'; //'smtp.example.com';                     // Servidor SMTP
    $mail->SMTPAuth   = true;                                   // Habilitar autenticación SMTP
    $mail->Username   = 'p7956721@gmail.com';                // SMTP username
    $mail->Password   = 'prueba1234';                        // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Habilitar encriptación TLS
    $mail->Port       = 587;                                    // Puerto TCP para conectar

    // Destinatarios
    $mail->setFrom('p7956721@gmail.com', 'Tu Nombre');       // Correo y nombre del remitente
    $mail->addAddress('p7956721@gmail.com', 'Nombre Destinatario'); // Añadir destinatario
    // Contenido del correo
    
    $mail->isHTML(true);                                        // Establecer el formato de correo a HTML
    $mail->Subject = 'Nuevo mensaje del formulario de contacto';
    $mail->Body    = "<h1>Nuevo mensaje de contacto</h1>
                      <p><strong>Nombre:</strong> {$name}</p>
                      <p><strong>Email:</strong> {$email}</p>
                      <p><strong>Mensaje:</strong> {$message}</p>
                      <p><strong>Política de Privacidad:</strong> {$privacyPolicy}</p>";
    $mail->AltBody = "Nuevo mensaje de contacto\n
                      Nombre: {$name}\n
                      Email: {$email}\n
                      Mensaje: {$message}\n
                      Política de Privacidad: {$privacyPolicy}";

    // Enviar correo
    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
