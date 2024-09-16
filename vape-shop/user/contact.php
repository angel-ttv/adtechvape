<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Aquí podrías enviar el mensaje por correo o almacenarlo en la base de datos
    echo "Gracias por tu mensaje, $name. Nos pondremos en contacto contigo pronto.";
}
?>
