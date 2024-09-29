<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $nacionalidad = $_POST['nacionalidad'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $numero_personas = $_POST['numero_personas'];
    $numero_noches = $_POST['numero_noches'];
    $mensaje = $_POST['mensaje'];

    // Configurar el correo electrónico
    $to = "daranhogo@outlook.com"; // Tu dirección de correo
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $nombre\nApellido: $apellido\nCorreo: $correo\nNacionalidad: $nacionalidad\nNúmero de Tel/WhatsApp: $telefono\nFecha deseada: $fecha\nNúmero de Personas: $numero_personas\nNúmero de Noches: $numero_noches\nMensaje: $mensaje";

    // Enviar el correo
    if (mail($to, $subject, $body)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
