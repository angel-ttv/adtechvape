let cart = [];

function addToCart(productName, price) {
    cart.push({ name: productName, price: price });
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    cart.forEach(item => {
        const div = document.createElement('div');
        div.textContent = `${item.name} - $${item.price}`;
        cartItems.appendChild(div);
    });
}

// Opcional: Añadir lógica para el botón de pago
document.getElementById('checkout').addEventListener('click', function() {
    alert('Funcionalidad de pago no implementada');
});
