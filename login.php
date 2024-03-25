<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión - Licorería Luis</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="background-container">
</div>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="controlador/registro.php" method="POST">
            <h1>Crear cuenta</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>o usa tu correo para registrarte</span>
            <input type="text" name="nombres" placeholder="Nombres" required>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
            <input type="text" name="telefono" placeholder="Teléfono" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <button type="submit" name="registrarse">Registrarse</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="controlador/iniciarsesion.php" method="POST">
            <h1>Iniciar sesión</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>o usa tu cuenta</span>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <a href="#">Olvidaste tu contraseña?</a>
            <button type="submit" name="iniciar_sesion">Iniciar sesión</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>¡Bienvenido de nuevo!</h1>
                <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                <button class="ghost" id="signIn">Iniciar sesión</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hola, Amigo!</h1>
                <p>Introduce tus datos personales y comienza a ver las mejores ofertas en bebidas alcohólicas</p>
                <button class="ghost" id="signUp">Registrate!!</button>
            </div>
        </div>
    </div>
</div>
<footer>
    <p>
        Tomar bebidas alcohólicas en exceso es dañino
        - Licorería Luis siempre preocupado en nuestros clientes😊😊.
    </p>
</footer>
<!-- Agrega este código al final del body en tu archivo HTML -->
<div id="notification" class="notification"></div>

<?php
// Obtener el mensaje de la URL, si está presente
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';

// Verificar si el mensaje no está vacío
if (!empty($mensaje)) {
?>
<script>
    // Obtener el elemento de la notificación
    var notification = document.getElementById("notification");

    // Establecer el mensaje en el contenido de la notificación
    notification.innerText = "<?php echo $mensaje; ?>";

    // Mostrar la notificación
    notification.style.display = "block";
</script>
<?php
}
?>
</body>
<script src="js/login.js"></script>
</html>
