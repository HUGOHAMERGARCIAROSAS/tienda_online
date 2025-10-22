function addToCart(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let existingProduct = cart.find(item => item.id === productId);

    if (existingProduct) {
        swal.fire('Error', `El producto "${existingProduct.name}" ya está en el carrito`, 'error');
    } else {
        let productElement = document.querySelector(`[onclick="addToCart(${productId})"]`).closest('article');
        let name = productElement.querySelector('.product-title a').innerText.trim();
        let price = parseFloat(productElement.querySelector('.price').getAttribute('content'));
        let image = productElement.querySelector('img').getAttribute('src');
        cart.push({
            id: productId,
            name: name,
            price: price,
            image: image,
            quantity: 1
        });
        swal.fire(`Producto "${name}" añadido al carrito`, '', 'success');
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
    renderCart();
}

function loadCart() {
    const cartContainer = document.querySelector('.cart-items');
    const totalContainer = document.getElementById('cart-total');
    const emptyMsg = document.querySelector('.empty_shopping_cart');
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (!cartContainer || !totalContainer) return;

    cartContainer.innerHTML = '';

    if (emptyMsg) emptyMsg.style.display = cart.length === 0 ? 'flex' : 'none';

    if (cart.length === 0) {
        totalContainer.innerText = 'S/ 0.00';
        return;
    }

    let total = 0;

    cart.forEach((item, index) => {
        total += item.price * item.quantity;

        const productHTML = `
            <div class="cart-item flex-container align-items-center justify-content-between mb-1 p-1 rounded shadow-sm border" data-index="${index}" style="background-color:#fff;">
                <div class="flex-container align-items-center">
                    <div class="image-wrapper" style="width:55px;height:55px;overflow:hidden;border-radius:8px;border:1px solid #eee;">
                        <img src="${item.image}" alt="${item.name}" style="width:100%;height:100%;object-fit:cover;">
                    </div>
                    <div class="flex-grow1" style="padding-left:10px;">
                        <p class="m-0 fw-semibold mr-2" style="font-size:14px;color:#333;">${item.name}</p>
                        <p class="m-0" style="font-size:13px;color:#888;">S/ ${(item.price * item.quantity).toFixed(2)} (S/ ${item.price.toFixed(2)} x ${item.quantity})</p>
                    </div>
                </div>
                <div class="text-end" style="padding-left:10px;">
                    <button class="flex-container align-items-center i-amphtml-form" onclick="removeFromCart(${index})" style="background-color:transparent;border:none;cursor:pointer;">
                       <i class="fa fa-trash text-danger" style="font-size:16px;"></i>
                    </button>
                </div>
            </div>
        `;

        cartContainer.insertAdjacentHTML('beforeend', productHTML);
    });

    totalContainer.innerText = `S/ ${total.toFixed(2)}`;

    document.querySelectorAll('.remove-item').forEach(btn => {
        btn.addEventListener('click', function() {
            const index = this.closest('.cart-item').dataset.index;
            removeFromCart(index);
        });
    });
}


function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
    renderCart();
}

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);

    const cartCountElement = document.querySelector('.cart-count');

    if (cartCountElement) {
        cartCountElement.innerText = totalItems;
        cartCountElement.style.display = totalItems > 0 ? 'inline-block' : 'none';
    }
}


document.addEventListener("DOMContentLoaded", function() {
    if (!document.querySelector('.pk-el-cart')) {
        const template = document.getElementById('cart-sidebar-template');
        if (template) {
            const clone = template.content.cloneNode(true);
            document.body.appendChild(clone);
        }
    }
    loadCart();
    renderCart();
});

function addToCart2(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let existingProduct = cart.find(item => item.id === productId);

    const name = document.querySelector('.product-info-section h1').innerText.trim();
    const price = parseFloat(document.querySelector('.normal-price').getAttribute('content'));
    const image = document.querySelector('.product-cover img')
        ? document.querySelector('.product-cover img').getAttribute('src')
        : '/images/default.jpg';
    const quantity = parseInt(document.getElementById('quantity_wanted').value) || 1;

    if (existingProduct) {
        existingProduct.quantity = quantity;
        swal.fire('Actualizado', `Cantidad de "${name}" actualizada a ${existingProduct.quantity}`, 'success');
    } else {
        cart.push({
            id: productId,
            name: name,
            price: price,
            image: image,
            quantity: quantity
        });
        swal.fire(`"${name}" añadido al carrito`, '', 'success');
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
    renderCart();
}

document.addEventListener("DOMContentLoaded", function () {
    const qtyInput = document.getElementById("quantity_wanted");
    const btnUp = document.querySelector(".btn-up");
    const btnDown = document.querySelector(".btn-down");

    if (!qtyInput || !btnUp || !btnDown) return;

    btnUp.addEventListener("click", function () {
        let current = parseInt(qtyInput.value) || 1;
        qtyInput.value = current + 1;
    });

    btnDown.addEventListener("click", function () {
        let current = parseInt(qtyInput.value) || 1;
        if (current > 1) qtyInput.value = current - 1;
    });
});


