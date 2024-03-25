// Array para almacenar los productos en el carrito
var carrito = [];

// Función para agregar un producto al carrito
function addToCart(productID) {
    // Agregar el producto al array del carrito
    carrito.push(productID);
    
    // Guardar el estado actual del carrito en localStorage
    localStorage.setItem('carrito', JSON.stringify(carrito));
    
    // Actualizar el contador del carrito
    var cartCounter = document.getElementById('cart-counter');
    cartCounter.textContent = carrito.length;
}

// Cargar el estado actual del carrito desde localStorage al cargar la página
window.addEventListener('load', function() {
    var storedCart = localStorage.getItem('carrito');
    if (storedCart) {
        carrito = JSON.parse(storedCart);
        var cartCounter = document.getElementById('cart-counter');
        cartCounter.textContent = carrito.length;
    }
});

