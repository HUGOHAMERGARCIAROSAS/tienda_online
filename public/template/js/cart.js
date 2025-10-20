document.addEventListener("DOMContentLoaded", function () {
        const cartContainer = document.getElementById("cart-items");
        const emptyCart = document.getElementById("empty-cart");
        const totalEl = document.getElementById("total");
        const shipping = 5;
        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        function renderCart() {
            cartContainer.innerHTML = "";
            if (cart.length === 0) {
                emptyCart.classList.remove("d-none");
                totalEl.textContent = "S/ 0.00";
                return;
            }
            emptyCart.classList.add("d-none");
            let subtotal = 0;
            cart.forEach((item, index) => {
            const itemSubtotal = item.price * item.quantity;
            subtotal += itemSubtotal;
            const div = document.createElement("div");
            div.className =
                "cart-item d-flex align-items-center justify-content-between border-bottom pb-2";
            div.innerHTML = `
                <div class="d-flex align-items-center gap-3">
                <img src="${item.image}" alt="${item.name}">
                <div>
                    <h6 class="mb-1">${item.name}</h6>
                    <small class="text-muted">S/ ${item.price.toFixed(2)} c/u</small>
                </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                <button class="qty-btn btn-decrease btn btn-outline-secondary btn-sm" data-index="${index}">-</button>
                <input type="number" min="1" value="${item.quantity}" data-index="${index}"
                    class="form-control form-control-sm text-center qty-input">
                <button class="qty-btn btn-increase btn btn-outline-secondary btn-sm" data-index="${index}">+</button>
                <p class="fw-semibold mb-0" style="width:80px;text-align:right;">S/ ${itemSubtotal.toFixed(2)}</p>
                <button class="btn-remove btn btn-outline-danger btn-sm" data-index="${index}">
                    <i class="fa fa-times"></i>
                </button>
                </div>
            `;
            cartContainer.appendChild(div);
            });

            totalEl.textContent = `S/ ${(subtotal + shipping).toFixed(2)}`;
            localStorage.setItem("cart", JSON.stringify(cart));
        }

        cartContainer.addEventListener("click", (e) => {
            const index = e.target.dataset.index;

            if (e.target.classList.contains("btn-increase")) {
                cart[index].quantity++;
                renderCart();
            }

            if (e.target.classList.contains("btn-decrease")) {
                if (cart[index].quantity > 1) {
                cart[index].quantity--;
                renderCart();
                }
            }

            if (e.target.closest(".btn-remove")) {
                const idx = e.target.closest(".btn-remove").dataset.index;
                const itemName = cart[idx]?.name || "este producto";
                swal.fire({
                    title: '¿Seguro que deseas eliminar "'+ cart[idx]?.name +'" del carrito?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        cart.splice(idx, 1);
                        renderCart();
                    } else {
                        return;
                    }
                });
            }
        });

        cartContainer.addEventListener("change", (e) => {
            if (e.target.classList.contains("qty-input")) {
            const index = e.target.dataset.index;
            let value = parseInt(e.target.value);
            if (isNaN(value) || value < 1) value = 1;
            cart[index].quantity = value;
            renderCart();
            }
        });

        document.getElementById("btnFinalizar").addEventListener("click", () => {
            if (cart.length === 0) return swal.fire("El carrito está vacío");
            window.location.href = "/checkout";
        });

        renderCart();
    });
