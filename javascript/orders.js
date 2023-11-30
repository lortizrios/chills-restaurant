

function addToCart(item, quantityId, modificationId) {
    const cartList = document.getElementById('cart-list');
    const quantity = document.getElementById(quantityId).value;
    const modification = document.getElementById(modificationId).value;
    
    const cartItem = document.createElement('li');
    cartItem.innerHTML = `
        <div class="cart-item">
            <div class="cart-item-details">
                <span class="item-in-cart">${item}</span> 
                (<span class="quantity">Quantity: ${quantity}</span>) 
                ${modification ? `<span class="modification">Modifications: ${modification}</span>` : ''}
            </div>
            <button class="remove-button" onclick="removeFromCart(this)">Remove</button>
        </div>`;
    cartList.appendChild(cartItem);
}

function removeFromCart(button) {
    const cartList = document.getElementById('cart-list');
    cartList.removeChild(button.parentElement.parentElement);
}



///

function showCartPopup() {
    const cartList = document.getElementById('cart-list');

    // Calculate the total price of the cart
    const totalPrice = Array.from(cartList.children).reduce((total, cartItem) => {
        const quantity = parseInt(cartItem.querySelector('.quantity').innerText.split(': ')[1]);
        const price = parseFloat(cartItem.querySelector('.price').innerText.split('$')[1]);
        return total + price;
    }, 0);

    // Create a pop-up window
    const popup = window.open('', '_blank', 'width=400,height=400,scrollbars=yes,resizable=yes');

    // Generate the content for the pop-up window
    const popupContent = `
        <html>
        <head>
            <title>Cart Summary</title>
            <style>
                .cart-item {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 10px;
                }
                .cart-item-details {
                    flex-grow: 1;
                    margin-right: 10px;
                }
                #payButton {
                    display: block;
                    margin: 0 auto;
                    padding: 10px 20px;
                    font-size: 18px;
                }
                #paidText {
                    display: none;
                    color: green;
                    text-align: center;
                    font-size: 18px;
                }
                #cancelButton {
                    display: block;
                    margin: 0 auto;
                    padding: 10px 20px;
                    font-size: 18px;
                }
                #cancelText {
                    display: none;
                    color: red;
                    text-align: center;
                    font-size: 18px;
                }
            </style>
        </head>
        <body>
            <h2>Cart Summary</h2>
            <ul>
                ${Array.from(cartList.children)
                    .map(item => {
                        const itemName = item.querySelector('.item-in-cart').innerText;
                        const quantity = item.querySelector('.quantity').innerText;
                        const modification = item.querySelector('.modification') ? item.querySelector('.modification').innerText : '';
                        const price = item.querySelector('.price').innerText;
                        return `<li class="cart-item">
                            <div class="cart-item-details">
                                <span class="item-in-cart">${itemName}</span>
                                (<span class="quantity">${quantity}</span>)
                                ${modification ? `<span class="modification">${modification}</span>` : ''}
                                <span class="price">${price}</span>
                            </div>
                        </li>`;
                    })
                    .join('')}
            </ul>
            <h3>Total Price: $${totalPrice.toFixed(2)}</h3>
            <button id="payButton" onclick="document.getElementById('payButton').style.display='none';document.getElementById('paidText').style.display='block'">Pay</button>
            <p id="paidText">Food Paid</p>
            <button id="cancelButton" onclick="document.getElementById('cancelButton').style.display='none';document.getElementById('cancelText').style.display='block' ">Cancel Order</button>
            <p id="cancelText">Order Cancel!</p>
        </body>
        </html>`;

    // Set the content of the pop-up window
    popup.document.write(popupContent);
}
 

 // Define temporary prices for each item
 const itemPrices = {
    'Chills Burger': 8.99,
    'Chills Fries': 3.49,
    'Chills Drink': 1.99
    // Add prices for other items as needed
};

function addToCart(item, quantityId, modificationId) {
    const cartList = document.getElementById('cart-list');
    const quantity = document.getElementById(quantityId).value;
    const modification = document.getElementById(modificationId).value;

    // Calculate the total price for the item
    const totalPrice = itemPrices[item] * quantity;

    const cartItem = document.createElement('li');
    cartItem.innerHTML = `
        <div class="cart-item">
            <div class="cart-item-details">
                <span class="item-in-cart">${item}</span> 
                (<span class="quantity">Quantity: ${quantity}</span>) 
                ${modification ? `<span class="modification">Modifications: ${modification}</span>` : ''}
                <span class="price">Price: $${totalPrice.toFixed(2)}</span>
            </div>
            <button class="remove-button" onclick="removeFromCart(this)">Remove</button>
        </div>`;
    cartList.appendChild(cartItem);
}
