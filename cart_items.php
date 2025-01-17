<?php
session_start();
include('database.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>


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
        <script src="script.js"></script>


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


        .food-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            align-items: center;
            padding: 100px;
        }

        .card-food {
            border-radius: 10px;
            width: 350px;
            height: 500px;
            padding: 30px 0px 50px 0px;
            display: flex;
            flex-direction: column;
            align-items: center;


        }

        .card-food img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            display: flex;
            align-items: center;
            Justify-content: center;


        }

        .card-food h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 15px 0;
            text-align: center;
        }

        .card-food p {
            text-align: center;
            justify-content: center;
            align-items: center;
            padding: 10px;
            display: flex;

            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
        }


        .card-food button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease 0s;
        }

        .card-food button:hover {
            background-color: red;
            color: white;
        }

        @media screen and (max-width: 768px) {
            .food-container {
                padding: 20px;
            }

            .card-food {
                width: 100%;
                max-width: 300px;
            }

        }

        .container-cart-items {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .cart-item {
            display: flex;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
        }

        .cart-item img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-right: 20px;
            border-radius: 4px;
        }

        .item-details {
            flex: 1;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 10px 0;
        }

        .quantity-controls button {
            padding: 5px 15px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .remove-btn {
            background: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .cart-total {
            text-align: right;
            margin-top: 20px;
            padding: 20px;
            border-top: 2px solid #ddd;
        }

        .checkout-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1em;
            margin-top: 10px;
        }

        .empty-cart {
            text-align: center;
            padding: 40px;
        }

        .continue-shopping {
            display: inline-block;
            background: #007bff;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            margin-top: 20px;
        }


        #basket-count {
            background-color: #ff4444;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            position: absolute;
            top: 25px;
            right: 630px;
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
                    <li><a href="normal.php">Home</a></li>
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


        <h1>Cart Items</h1>

        <div class="container-cart-items">
            <div id="cart-content">
                <!-- Cart items will be loaded here dynamically -->
            </div>
        </div>





    </body>


    <script>
    // Load cart content immediately when page loads
    document.addEventListener('DOMContentLoaded', loadCart);




    document.addEventListener('DOMContentLoaded', function() {
        updateCartCount();

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
        const cartContent = document.getElementById('cart-content');

        if (!data.items || data.items.length === 0) {
            cartContent.innerHTML = `
                <div class="empty-cart">
                    <p>Your cart is empty</p>
                    <a href="filipinofood.php" class="continue-shopping">Continue Shopping</a>
                </div>
            `;
            return;
        }

        let html = '<div class="card-items">';

        data.items.forEach(item => {
            html += `
                <div class="cart-item" id="item-${item.id}">
                    <img src="${item.recipeimage}" alt="${item.recipename}">
                    <div class="item-details">
                        <h3>${item.recipename}</h3>
                        <p>Price: ₱${parseFloat(item.price).toFixed(2)}</p>
                        
                        <div class="quantity-controls">
                            <button onclick="updateQuantity(${item.id}, ${item.quantity - 1})">-</button>
                            <span id="quantity-${item.id}">${item.quantity}</span>
                            <button onclick="updateQuantity(${item.id}, ${item.quantity + 1})">+</button>
                        </div>
                        
                        <p>Item Total: ₱${(item.price * item.quantity).toFixed(2)}</p>
                        <button onclick="removeFromCart(${item.id})" class="remove-btn">Remove</button>
                    </div>
                </div>
            `;
        });

        html += `
            <div class="cart-total">
                <h3>Total: ₱${parseFloat(data.total).toFixed(2)}</h3>
                <button class="checkout-btn">Proceed to Checkout</button>
            </div>
        `;

        cartContent.innerHTML = html;
    }

    function updateQuantity(productId, newQuantity) {
        if (newQuantity < 1) return;

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
        if (confirm('Are you sure you want to remove this item?')) {
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


    function updateCartCount() {
        fetch('cart_operations.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=get_count'
            })
            .then(response => response.json())
            .then(data => {
                // Update the basket count
                const basketCount = document.querySelector('#basket-count');
                if (basketCount) {
                    basketCount.textContent = data.count || '0';
                }
            })
            .catch(error => console.error('Error:', error));
    }
    </script>










</html>