<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "elmasterditor1539@gmail.com"; // Reemplaza con tu dirección de correo
    $asunto = "NUEVO CLIENTE DE ENY BOUTIQUE";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Mensaje:\n$mensaje";

    mail($destinatario, $asunto, $contenido);

    // Redirige al usuario a una página de confirmación
    header("Location: confirmacion.html");
}
?>