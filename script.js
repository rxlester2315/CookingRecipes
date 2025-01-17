document.addEventListener("DOMContentLoaded", function () {
  // Load cart on page load
  loadCart();

  // Add click handlers for add to cart buttons
  document.querySelectorAll(".add-to-cart").forEach((button) => {
    button.addEventListener("click", function () {
      const productId = this.dataset.productId;
      addToCart(productId);
    });
  });

  // Navigation bar button (Hamburger)
  document.querySelector(".hamburger").addEventListener("click", function () {
    document.querySelector(".nav__link").classList.toggle("active");
    const spans = this.querySelectorAll("span");
    spans[0].classList.toggle("rotate-45");
    spans[1].classList.toggle("opacity-0");
    spans[2].classList.toggle("rotate--45");
  });
});

// General fetch function to handle all requests
async function sendCartRequest(action, productId = null, quantity = null) {
  try {
    const params = new URLSearchParams();
    params.append("action", action);
    if (productId) params.append("product_id", productId);
    if (quantity) params.append("quantity", quantity);

    const response = await fetch("cart_operations.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: params.toString(),
    });

    const cartData = await response.json();
    updateCartDisplay(cartData);
  } catch (error) {
    console.error("Error:", error);
  }
}

// Function to load the cart data from the server
function loadCart() {
  sendCartRequest("get");
}

// Function to add a product to the cart
function addToCart(productId) {
  sendCartRequest("add", productId);
}

// Function to remove a product from the cart
function removeFromCart(productId) {
  sendCartRequest("remove", productId);
}

// Function to update the quantity of a product in the cart
function updateQuantity(productId, quantity) {
  sendCartRequest("update", productId, quantity);
}

// Function to update the cart display
function updateCartDisplay(cartData) {
  const cartContainer = document.getElementById("cart-container");
  if (!cartData.items.length) {
    cartContainer.innerHTML = "<p>Your cart is empty</p>";
    return;
  }

  // Create the cart items HTML dynamically
  let html = `<div class="cart-items">`;
  cartData.items.forEach((item) => {
    html += `
      <div class="cart-item">
        <img src="${item.image_url}" alt="${item.name}" class="cart-item-image">
        <div class="cart-item-details">
          <h3>${item.name}</h3>
          <p>Price: $${item.price}</p>
          <div class="quantity-controls">
            <button onclick="updateQuantity(${item.id}, ${
      item.quantity - 1
    })">-</button>
            <span>${item.quantity}</span>
            <button onclick="updateQuantity(${item.id}, ${
      item.quantity + 1
    })">+</button>
          </div>
          <p>Total: $${item.item_total}</p>
          <button onclick="removeFromCart(${
            item.id
          })" class="remove-item">Remove</button>
        </div>
      </div>
    `;
  });
  html += `</div><div class="cart-total">Total: $${cartData.total}</div>`;
  cartContainer.innerHTML = html;
}
