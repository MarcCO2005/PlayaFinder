<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $privacyPolicy = isset($_POST['privacyPolicy']) ? "Aceptado" : "No aceptado";

    // Dirección de correo electrónico de destino
    $to = "aodariolopez@gmail.com"; // Cambia esto a tu dirección de correo electrónico

    // Asunto del correo electrónico
    $subject = "Nuevo mensaje de contacto de $name";

    // Cuerpo del correo electrónico
    $body = "Nombre: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mensaje: $message\n";
    $body .= "Política de Privacidad: $privacyPolicy\n";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
} else {
    echo "Solicitud no válida.";
}
?>
