<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario de vuelta al inicio o a donde desees
header("Location: ../index.php");
exit;
?>
