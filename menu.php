<link rel="stylesheet" href="css/encabezado.css">
<header>
    <div class="navbar">
        <div class="logo">
            <img src="img/logo.png" alt="Licoreria Luis">
        </div>
        <ul class="links">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Catalogo</a></li>
            <li><a href="#">Contactanos</a></li>
            <li><a href="nosotros.php">Sobre nosotros</a></li>
        </ul>
        <form action="">
            <input type="search" required>
            <i class="fa fa-search"></i>
        </form>
        <?php
        // Verificar si el usuario ha iniciado sesión
        session_start();
        if(isset($_SESSION['nombre'])) {
            // Si ha iniciado sesión, mostrar su nombre y un enlace para cerrar sesión
            echo '<div class="user-info" onmouseover="showMenu()" onmouseout="hideMenu()">';
            echo '<span class="welcome-message">Hola, <span class="user-name">' . $_SESSION['nombre'] . '</span></span>';
            echo '<a href="carrito.php" class="cart-icon" id="cart-icon">🛒 <span id="cart-counter">0</span></a>';
            echo '<div class="dropdown-content" id="dropdown">';
            echo '<a class="logout-button" href="controlador/cerrarsesion.php">Cerrar Sesión</a>';
            echo '</div>';
        } else {
            // Si no ha iniciado sesión, mostrar el botón de iniciar sesión
            echo '<button type="button" class="login-button" onclick="window.location.href=\'login.php\'">Iniciar Sesión</button>';
        }
        ?>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="dropdown_menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Contactanos</a></li>
        <li><a href="#">Catalogo</a></li>
        <li><a href="#">Sobre nosotros</a></li>
    </div>
</header>

<script>
    const toggleBtn = document.querySelector('.toggle_btn');
    const toggleBtnIcon = document.querySelector('.toggle_btn i');
    const dropDownMenu = document.querySelector('.dropdown_menu');

    toggleBtn.onclick = function () {
        dropDownMenu.classList.toggle('open');
        const isOpen = dropDownMenu.classList.contains('open');

        toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars';
    };
</script>
<script src="js/carrito.js"></script>

