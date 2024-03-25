<?php
// Iniciar la sesión si aún no se ha iniciado
session_start();

// Verificar si el formulario de inicio de sesión ha sido enviado
if (isset($_POST['iniciar_sesion'])) {
    // Incluir el archivo de conexión a la base de datos
    include("cn.php");

    // Recibir los datos del formulario
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Consulta SQL para verificar si el correo y la contraseña coinciden con los registros de la base de datos
    $consulta_login = "SELECT * FROM cliente WHERE CorreoElectronico = '$correo' AND Contraseña = '$contraseña'";
    $resultado_login = mysqli_query($conexion, $consulta_login);

    // Verificar si se encontraron resultados (es decir, si las credenciales son válidas)
    if (mysqli_num_rows($resultado_login) > 0) {
        // Las credenciales son válidas, almacenar los datos del usuario en variables de sesión
        $usuario = mysqli_fetch_assoc($resultado_login);
        $_SESSION['id_cliente'] = $usuario['ID_Cliente'];
        $_SESSION['nombre'] = $usuario['Nombre'];
        $_SESSION['telefono'] = $usuario['NumeroTelefono'];

        // Redirigir al usuario al index o a donde desees
        header("Location: ../index.php");
        exit;
    } else {
        // Las credenciales no son válidas, redirigir al usuario al formulario de inicio de sesión con un mensaje de error
        header("Location: ../login.php?mensaje=Correo o contraseña incorrecta");
        exit;
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    // Si el formulario no ha sido enviado correctamente, redirigir al usuario al formulario de inicio de sesión
    header("Location: ../login.php");
    exit;
}
?>
