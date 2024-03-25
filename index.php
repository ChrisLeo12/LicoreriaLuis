<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licoreria Luis</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>
<?php include ("menu.php"); ?>
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="https://i0.wp.com/licoresgrandezza.com.mx/wp-content/uploads/2020/04/Banner-5.png?fit=1990%2C843&ssl=1" alt="Promoción 1"></div>
            <div class="slide"><img src="https://www.iducero.mx/contenido/c23f3e780_banner_slider_home.jpg" alt="Promoción 2"></div>
            <div class="slide"><img src="https://licorylimon.com/wp-content/uploads/2020/10/licor-a-domicilio-en-Zipaqui_fondo-negro.png" alt="Promoción 3"></div>
        </div>
        <button class="prev-button" onclick="prevSlide()">&#10094;</button>
        <button class="next-button" onclick="nextSlide()">&#10095;</button>
    </div>
    <div class="promo-grid">
    <h2>Nuestras Promociones</h2>
        <div class="carousel">
        <?php
        // Incluir el archivo de conexión a la base de datos
        include("controlador/cn.php");

        // Realizar la consulta SQL para seleccionar todos los productos
        $consulta = "SELECT * FROM producto";
        $resultado = mysqli_query($conexion, $consulta);

        // Verificar si se obtuvieron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Mostrar los productos en el carrusel
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<div class="product-card">';
                echo '<img src="' . $fila['Imagen'] . '" alt="' . $fila['Nombre'] . '" class="product-image">';
                echo '<div class="product-details">';
                echo '<h3 class="product-name">' . $fila['Nombre'] . '</h3>';
                echo '<p class="product-price">Precio: S/' . $fila['Precio'] . '</p>';
                echo '<button class="add-to-cart" data-product-id="' . $fila['ID_Producto'] . '" onclick="addToCart(' . $fila['ID_Producto'] . ')">Agregar al carrito</button>';
                echo '</div>'; // Cierre de div.product-details
                echo '</div>'; // Cierre de div.product-card
                }
            } else {
                echo "No se encontraron productos.";
            }
            // Cerrar la conexión a la base de datos
            mysqli_close($conexion);
            ?>
        </div>
    </div>
    <img id="lema" src="https://licorerias.com.pe/wp-content/uploads/2023/10/CINTILLO-WEB_ESCRITORIO-BLACK-WHISKY.webp" alt="Es un elixer">
    <h2 id="ca">Todas nuestras categorias</h2>
    <div class="cate-inicio">
    <div class="category"> 
        <a href="pagina_del_vino.html">
            <img src="https://licorerias.com.pe/wp-content/uploads/2023/11/vinos-1.webp" alt="Vino">
            <p>Vino</p>
        </a>
    </div>
    <div class="category">
        <a href="pagina_del_ron.html">
            <img src="https://licorerias.com.pe/wp-content/uploads/2023/11/rones.webp" alt="Ron">
            <p>Ron</p>
        </a>
    </div>
    <div class="category">
        <a href="pagina_del_whisky.html">
            <img src="https://licorerias.com.pe/wp-content/uploads/2023/11/whiskys-2.webp" alt="Whisky">
            <p>Whisky</p>
        </a>
    </div>
    <div class="category">
        <a href="pagina_de_la_cerveza.html">
            <img src="https://licorerias.com.pe/wp-content/uploads/2023/11/vodkas.webp" alt="Cerveza">
            <p>Vodka</p>
        </a>
    </div>
</div>
<div class="recomend">
    <h1>Nuestras recomendaciones para alegrar las fiestas</h1>
    <div class="product-grid">
        <?php
        // Incluir el archivo de conexión a la base de datos
        include("controlador/cn.php");

        // Realizar la consulta SQL para seleccionar todos los productos
        $consulta = "SELECT * FROM producto";
        $resultado = mysqli_query($conexion, $consulta);

        // Verificar si se obtuvieron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Mostrar los productos en el carrusel
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo '<div class="product-card">';
                echo '<img src="' . $fila['Imagen'] . '" alt="' . $fila['Nombre'] . '" class="product-image">';
                echo '<div class="product-details">';
                echo '<h3 class="product-name">' . $fila['Nombre'] . '</h3>';
                echo '<p class="product-price">Precio: S/' . $fila['Precio'] . '</p>';
                echo '<button class="add-to-cart" data-product-id="' . $fila['ID_Producto'] . '" onclick="addToCart(' . $fila['ID_Producto'] . ')">Agregar al carrito</button>';
                echo '</div>'; // Cierre de div.product-details
                echo '</div>'; // Cierre de div.product-card
            }
        } else {
            echo "No se encontraron productos.";
        }
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        ?>
    </div>
    <button class="show-more">Mostrar más opciones...</button>
</div>

<div class="premium">
    <div class="premium-image">
        <img src="https://licoreriasunidas.pe/cdn/shop/files/domperi_123456.jpg?v=1678558859&width=2000" alt="Champang">
        <div class="premium-info">
            <h6>CHAMPAGNE</h6>
            <h2>DOM PÉRIGNON ROSÉ</h2>
            <p>Dom Pérignon Rosé es una atrevida reinterpretación del estilo de Dom Pérignon. Impetuoso y chispeante, pero sin fisuras. Intrigante con su color ámbar, revelando notas minerales y carnales. EL COLOR: Rosa cobrizo con destellos naranja claro.</p>
            <button>Ver Producto</button>
        </div>
    </div>
</div>
<section class="ultimo">
  <h3>Siempre contamos con licores nacionale e importados</h3>
  <div class="grilla">
    <div class="tarjeta">
      <img src="https://static.mercadonegro.pe/wp-content/uploads/2021/06/28145236/Destileria-scaled-1.jpg" alt="Calidad Nacional"/>
      <h4>Licores Peruanos</h4>
      <p>"Licores Peruanos: Reflejo de la riqueza cultural y la tradición artesanal de Perú. Desde la emblemática pisco hasta exquisitos licores de frutas tropicales, la diversidad y calidad de los licores peruanos deleitan los sentidos y narran historias de nuestra tierra."</p>
    </div>
    <div class="tarjeta">
      <img src="https://elestimulo.com/wp-content/uploads/2023/06/sherry.jpeg" alt="Calidad Internacional"/>
      <h4>Licores importados</h4>
      <p>"Licores Importados: Una selección cuidadosa de las mejores bebidas de todo el mundo. Desde los clásicos vinos europeos hasta los exóticos licores asiáticos, nuestra colección de licores importados ofrece una experiencia única y sofisticada para los amantes de la buena bebida."</p>
    </div>
    <div class="tarjeta">
      <img src="https://jesuspolo.net/wp-content/uploads/2017/11/haz-clientes-felices-1.jpg" alt="Clientes Alegres"/>
      <h4>Clientes siempre alegres</h4>
      <p>"Nuestro compromiso es garantizar la satisfacción de nuestros clientes en cada visita. Ofrecemos productos de calidad, un servicio personalizado y una experiencia de compra excepcional para asegurarnos de que cada cliente se vaya con una sonrisa."</p>
    </div>
  </div>
</section>
<?php include("piepagina.php"); ?>
</body>
<script src="js/carrusel.js"></script>
<script src="js/carrito.js"></script>
</html>