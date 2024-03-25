var mensaje = "<?php echo isset($mensaje) ? $mensaje : ''; ?>";

// Verificar si el mensaje no está vacío
if (mensaje !== '') {
    // Obtener el elemento de la notificación
    var notification = document.getElementById("notification");

    // Establecer el mensaje en el contenido de la notificación
    notification.innerText = mensaje;

    // Mostrar la notificación
    notification.style.display = "block";
}