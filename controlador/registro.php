<?php
// Incluir el archivo de conexión a la base de datos
include("cn.php");

// Definir una variable para almacenar el mensaje de confirmación o error
$mensaje = "";

// Verificar si el formulario de registro ha sido enviado
if (isset($_POST['registrarse'])) {
    // Recibir los datos del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Consulta SQL para verificar si el correo ya existe en la tabla de clientes
    $consulta_correo = "SELECT * FROM cliente WHERE CorreoElectronico = '$correo'";
    $resultado_correo = mysqli_query($conexion, $consulta_correo);

    // Verificar si se encontraron resultados (es decir, si el correo ya existe)
    if (mysqli_num_rows($resultado_correo) > 0) {
        // El correo ya está registrado, mostrar mensaje de error
        $mensaje = "El correo electrónico ya está registrado.";
    } else {
        // El correo no está registrado, proceder con el registro del usuario

        // Preparar la consulta SQL para insertar los datos en la tabla de clientes
        $consulta_insertar = "INSERT INTO cliente (Nombre, Apellido, Contraseña, CorreoElectronico, Direccion, NumeroTelefono) 
                              VALUES ('$nombres', '$apellidos', '$contraseña', '$correo', '', '$telefono')";

        // Ejecutar la consulta de inserción
        if (mysqli_query($conexion, $consulta_insertar)) {
            // Registro exitoso, establecer el mensaje de confirmación
            $mensaje = "Usuario creado correctamente.";
        } else {
            // Ocurrió un error al ejecutar la consulta de inserción, mostrar mensaje de error
            $mensaje = "Error al registrar el usuario: " . mysqli_error($conexion);
        }
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Redirigir de vuelta a login.php con el mensaje como parámetro de la URL
header("Location: ../login.php?mensaje=" . urlencode($mensaje));
exit;
?>
