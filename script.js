<script src="jquery-3.6.3.min.js"></script>
let cartItems = [];

function addToCart(productName, price) {
    alert("hello");
    cartItems.push({ name: productName, price: price });
    updateCart();
}

function updateCart() {
    const cartList = document.getElementById('cart-items');
    const totalElement = document.getElementById('cart-total');

    // Clear existing items
    cartList.innerHTML = '';

    // Add new items
    let total = 0;
    cartItems.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - LKR ${item.price.toFixed(2)}`;
        cartList.appendChild(listItem);
        total += item.price;
    });

    // Update total
    totalElement.textContent = total.toFixed(2);
}

function checkout() {
    // Here you can implement the logic for the checkout process
    alert('Checkout functionality will be implemented here.');
    // You might want to send the cartItems array to the server for processing.
    // For now, let's clear the cart after checkout.
    cartItems = [];
    updateCart();
}
