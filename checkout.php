<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="landing/css/templatemo-style.css?v=1.0">


        <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .image-logo img {
            width: 100px;
            height: 50px;
            object-fit: contain;
        }

        .nav__link ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .nav__link a {
            text-decoration: none;
            color: white;
            font-size: 15px;
            font-family: "Montserrat", sans-serif;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: white;
            transition: 0.3s;
        }

        @media screen and (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .nav__link {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: #333;
            }

            .nav__link.active {
                display: block;
            }

            .nav__link ul {
                flex-direction: column;
                padding: 20px;
                gap: 20px;
            }

            .profile-info {
                display: none;
            }

            .dropbtn {
                position: absolute;
                left: 20px;

            }
        }

        .profile-info a {
            border: 1px solid white;
            border-radius: 5px;
            padding: 5px;
            background-color: white;
            margin-right: 100px;
            transition: all 0.3s ease 0s;
        }

        .profile-info a:hover {
            background-color: white;
            color: black;
        }

        .recent-order {
            display: flex;
            gap: 80px;
            margin-top: 50px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .orderss {
            border: 1px solid black;
            border-radius: 10px;
            width: 300px;
            height: 500px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .orderss img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .orderss h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 15px 0;
            text-align: center;
        }

        .orderss p {
            flex-grow: 1;
            overflow-y: auto;
            padding: 10px;
            margin: 0;
            text-align: center;
            line-height: 1.5;
            max-height: 150px;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
        }

        .orderss button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
            width: 150px;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 30px;
        }

        .icon-orders {
            display: flex;
            gap: 20px;
        }

        .icon-orders i {
            font-size: 20px;
            color: white;
        }

        .icon-orders a {
            text-decoration: none;
            color: white;
        }

        .icon-orders a:hover {
            color: black;
        }

        .icon-orders li {
            list-style: none;
        }


        .dropdown-content {
            display: none;
            /* Hide the dropdown by default */
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            z-index: 1;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        /* Dropdown links */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }


        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown when hovering over the dropdown */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when hovering */
        .dropdown:hover .dropbtn {
            background-color: #555;
        }

        li {
            list-style: none;
        }

        #basket-count {
            background-color: #ff4444;

            padding: 2px 6px;
            font-size: 12px;
            border-radius: 50%;
            position: absolute;
            top: 25px;
            right: 630px;


        }

        .items-cart img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }

        .cart-header {
            display: flex;
            Justify-content: baseline;
            padding: 30px;
        }

        .info-header {
            display: flex;
            justify-content: baseline;
            padding: 20px;
            margin-left: 200px;
            gap: 200px;
        }

        .items-cart {
            display: flex;
            justify-content: baseline;
            padding: 20px;
            margin-left: 200px;
            gap: 200px;
        }

        .items-cart p {
            margin-left: 10px;
            padding-top: 60px;


        }


        .container-checkouts {
            background-color: #f9f9f9;
            display: flex;
            padding: 30px;
            height: 700px;
            width: 400px;
            border-radius: 10px;
            flex-direction: column;
        }

        .row-info {
            display: flex;
            gap: 70px;
        }

        .item-cart-image img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;

        }

        .item-cart-image {
            padding: 20px;
        }

        .item-cart-image h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 15px 0;
            text-align: center;
        }


        table {
            width: 1300px;

            border-collapse: collapse;
            margin-left: 10px;
        }

        th {
            background-color: #333;
            color: white;
            font-size: 20px;
            padding: 20px;
        }

        td {
            text-align: center;
            padding: 10px;
            font-size: 18px;
        }

        .container-checkouts p,
        h3,
        h4 {
            padding: 10px;
        }

        .container-checkouts input {
            margin: 10px;
        }

        .payment-card img {
            width: 150px;
            height: 70px;
            font-size: 30px;
            border-radius: 10px;
        }

        .payment-card {
            display: flex;
            gap: 20px;
            padding: 15px;
        }

        .btn-submit {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
            width: 150px;
            margin-left: 100px;
            transition: all 0.3s ease 0s;
        }

        .btn-submit:hover {
            background-color: rgb(231, 9, 9);
        }

        .total-cost {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .container-cart {
            display: flex;
            gap: 40px;
            justify-content: center;
        }

        .total-cost hr {
            border: 1px solid black;
            width: 100px;
            color: white;
        }

        .total-cost p {
            font-weight: 700;
            color: black;
        }

        .total-costs {
            gap: 10px;
            display: flex;
            flex-direction: column;


        }

        .total-costs hr {
            border: 1px solid #f9f9f9;
            width: 100px;
            color: white;

        }



        .quantity-controls {
            display: flex;
            gap: 15px;
            align-items: center;
            justify-content: center;
            margin-top: 80px;
        }


        .quantity-controls button {
            background-color: #333;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 30px;
            transition: all 0.3s ease 0s;

        }

        .btn-removes button {
            background-color: #333;
            color: white;
            width: 100px;
            height: 30px;
            transition: all 0.3s ease 0s;

        }

        .btn-removes button:hover {
            background-color: rgb(231, 9, 9);
        }

        .cart-sidebar {
            max-height: 600px;
            overflow-y: auto;
            padding: 20px;
            margin-left: 30px;
        }

        .cart-sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .cart-sidebar::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }

        .cart-sidebar::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }


        .payment-card {
            display: inline-block;
            text-align: center;

        }

        .payment-card label img {
            cursor: pointer;
            border: 3px solid transparent;
            border-radius: 10px;
            width: 100px;
            height: auto;
            transition: border 0.3s ease, transform 0.2s ease;


        }


        .payment-card label img:hover {
            transform: scale(1.05);
        }

        .payment-card input[type="radio"] {
            display: none;
        }

        .payment-card input[type="radio"]:checked+label img {
            border: 3px solid red;
            transform: scale(1.05);
        }
        </style>

    </head>

    <body>




        <header>
            <div class="image-logo">
                <img class="logo" src="logo_remove.png" alt="">
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="nav__link">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">Chefs</a></li>
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Desert</a>
                            <div class="dropdown-content">
                                <a href="filipinodesert.php">Filipino Desert</a>
                                <a href="#">Saharan Desert </a>
                                <a href="#">Arabian Desert </a>
                                <a href="#">Gobi Deser</a>
                                <a href="#">Kalahari Desert</a>

                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Dishes</a>
                            <div class="dropdown-content">
                                <a href="filipinofood.php">Filipino Food</a>
                                <a href="italianfood.php">Italian Food</a>
                                <a href="japanesefood.php">Japanese Food</a>
                                <a href="chinesefood.php">Chinese Food</a>
                                <a href="americanfood.php">American Food</a>

                            </div>
                        </li>
                    </ul>

                </ul>




                </ul>
            </nav>
            <ul class="icon-orders">
                <div id="basket">
                    <li>
                        <a href="cart_items.php">
                            <i class="fa-solid fa-shopping-cart"></i>
                            <span id="basket-count">0</span>
                        </a>
                    </li>
                </div>
                <li><a href=""><i class="fa-solid fa-bell"></i></a></li>
            </ul>
            <div class="profile-info">
                <ul>
                    <li class="dropdown">
                        <a href=""><i class="fa-solid fa-user"></i> Profile</a>

                        <div class="dropdown-content">
                            <a href="logout.php">Logout</a>
                            <a href="edit_profile.php">Edit Profile</a>
                        </div>
                    </li>
                </ul>
            </div>


        </header>


        <h1 class="cart-header">Shopping Cart</h1>
        <div class="row-info">



            <div class="cart-sidebar">


                <div class="container-checouts" id="cart-items">

                </div>
            </div>

            <div class="container-checkouts">

                <div class="container-cart">
                    <div class="total-cost">
                        <h4>Cart Total</h4>
                        <hr>
                        <p>Subtotal</p>
                        <hr>
                        <p>Shipping</p>
                        <hr>
                        <p>Total</p>
                        <hr>
                    </div>

                    <div class="total-costs">

                    </div>
                </div>



                <form action="checkout_backend.php" method="POST">
                    <h3>Payment Method</h3>

                    <div class="payment-card">
                        <input type="radio" name="typeofpayment" id="creditcard" value="creditcard" required>
                        <label for="creditcard">
                            <img src="creadit.jpg" alt="creditcard">
                        </label>
                    </div>

                    <div class="payment-card">
                        <input type="radio" name="typeofpayment" id="Gcash" value="Gcash" required>
                        <label for="Gcash">
                            <img src="gcash.jpg" alt="Gcash">
                        </label>
                    </div>

                    <div class="payment-card">
                        <input type="radio" name="typeofpayment" id="COD" value="COD" required>
                        <label for="COD">
                            <img src="cod.jpg" alt="COD">
                        </label>
                    </div>

                    <div class="total-price">
                        <input type="hidden" name="totalprice" id="totalprice" value="1000">
                        <!-- Ensure a value is set -->
                    </div>

                    <button type="submit" name="submit" class="btn-submit">Place Order</button>
                </form>

            </div>




    </body>


    <script>
    document.addEventListener('DOMContentLoaded', loadCart);

    document.addEventListener(" DOMContentLoaded", function() {
        updateCartCount();

    });
    document.querySelector('.hamburger').addEventListener('click', function() {
        document.querySelector('.nav__link').classList.toggle('active');
        const
            spans = this.querySelectorAll('span');
        spans[0].classList.toggle('rotate-45');
        spans[1].classList.toggle('opacity-0');
        spans[2].classList.toggle('rotate--45');
    });


    function loadCart() {

        fetch('cart_operations.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=get'
            })
            .then(response => response.json())
            .then(displayCart)
            .catch(error => console.error('Error:', error));
    }

    function displayCart(data) {
        const cartItems = document.getElementById('cart-items');
        const totalCostElement = document.querySelector('.total-costs'); // Target total cost container
        let shipping = 83;

        if (!data.items || data.items.length === 0) {
            cartItems.innerHTML = '<h3>Cart is empty</h3>';
            totalCostElement.innerHTML = `
            <p>Subtotal: Php 0.00</p>
            <hr>
            <p>Shipping: Php 0.00</p>
            <hr>
            <p>Tax: Php 0.00</p>
            <hr>
            <p>Total: Php 0.00</p>
            <hr>
        `; // Set total to 0 if empty
            shipping = 0;

            return;
        }

        let html = '<table><tbody><tr><th>Product</th><th>Dish Type</th><th>Quantity</th><th>Price</th></tr>';
        let totalPrice = 0; // Initialize total price

        data.items.forEach(item => {
            let itemTotal = item.quantity * item.price; // Calculate total for each item
            totalPrice += itemTotal; // Add to total price
            html += `<tr>
            <td class="item-cart-image">
                <h3>${item.recipename}</h3>
                <img src="${item.recipeimage}" alt="">
            </td>
            <td>${item.typeofdish}</td>

         <td class="quantity-controls">
    <button type="button" onclick="updateQuantity(${item.id}, ${item.quantity - 1})">-</button>
    <span id="quantity-${item.id}">${item.quantity}</span>
    <button type="button" onclick="updateQuantity(${item.id}, ${item.quantity + 1})">+</button>

    <div class="btn-removes">
    <button  class="remove-btnss"type="button" onclick="removeFromCart(${item.id})">Remove</button>
    
     </div>
    
</td>

        
            <td>Php ${(item.price * item.quantity).toFixed(2)}</td>
        </tr>`;
        });

        html += '</tbody></table>'; // Close the table properly
        cartItems.innerHTML = html; // Update the cart content

        let finalTotal = totalPrice + shipping; // Add shipping once
        document.getElementById('totalprice').value = finalTotal.toFixed(2);


        totalCostElement.innerHTML = `
        <p>Subtotal: Php ${totalPrice.toFixed(2)}</p>
        <hr>
        <p>Subtotal : 0</p>
    <hr>
        <p>Shipping: Php ${shipping.toFixed(2)}</p>
        <hr>
        <p>Total: Php ${finalTotal.toFixed(2)}</p>
        <hr>
    `;
    }


    function updateQuantity(productId, newQuantity) {


        if (newQuantity < 1) {
            removeFromCart(productId);
            return;
        }

        fetch('cart_operations.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `action=update&product_id=${productId}&quantity=${newQuantity}`
            })
            .then(response => response.json())
            .then(displayCart)
            .catch(error => console.error('Error:', error));


    }


    function removeFromCart(productId) {
        if (confirm('Are you sure you want to remove this items?')) {
            fetch('cart_operations.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `action=remove&product_id=${productId}`
                })
                .then(response => response.json())
                .then(displayCart)
                .catch(error => console.error('Error:', error));
        }
    }
    </script>



</html>