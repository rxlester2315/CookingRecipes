<?php
// Add this at the very top of filipinofoods.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include('database.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}



$sql = "SELECT id,desertname,desertimage,description,typeofdesert,aboutdesert,price,ingredients FROM deserts";


$result = $conn->query($sql);
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



        .desert-container {
            display: flex;
            Justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 50px;
            padding-top: 100px;
        }


        .desert-card {
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            Justify-content: center;
            align-items: center;
            width: 400px;
            height: 300px;
            padding: 30px;
        }

        .desert-container h3 {
            padding: 30px;
        }

        .desert-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }


        .desert-card button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
            width: 150px;
            transition: all 0.3s ease 0s;
        }

        .desert-card button:hover {
            background-color: red;
            color: white;
        }

        #basket-count {
            background-color: #ff4444;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            position: absolute;
            top: -8px;
            right: -8px;
        }

        #basket {
            position: relative;
        }

        .price-recipe {
            font-size: 20px;
            color: black;
            font-weight: bold;
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
                                <a href="#">Filipino Halo-Halo Desert</a>
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

        <h1>Desert</h1>

        <div class="desert-container">




            <?php

            if($result->num_rows > 0){
                

                while($row = $result->fetch_assoc()){

                    if(trim(strtolower($row['typeofdesert'])) === 'filipino'){

                        echo '
                        
                        <div class="desert-card">

                        <img src ="'.htmlspecialchars($row['desertimage']). '"alt="'.htmlspecialchars($row['desertname']). '">
                        <h3> '.htmlspecialchars($row['desertname']).'</h3>
                        <p>'.htmlspecialchars($row['aboutdesert']).'</p>
                           <button class="add-to-cart" data-product-id="' . htmlspecialchars($row['id']) . '">
                        <i class="fa-solid fa-cart-shopping"></i> Add To Cart
                    </button>





                        </div>';
                    }
                }
            }else {
                        echo '<p>No food items found.</p>';

            }
            
            
            
            
            
             ?>












        </div>






    </body>


    <script>
    document.addEventListener('DOMContentLoaded', function() {


        updateCartCount();


        document.querySelectorAll('.add-to-cart').forEach(button => {

            button.addEventListener('click', function(e) {
                e.preventDefault();

                const productId = this.getAttribute('data-product-id');
                this.disabled = true;
                addToCarts(productId, this);



            });

        });
    });


    function updateCartCount() {

        fetch(
                'cart_operations.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=get_count'
                }
            )
            .then(response => response.json())
            .then(data => {
                const basketCount = document.querySelector('#basket-count');

                if (basketCount) {
                    basketCount.textContent = data.count || '0';
                }
            })

            .catch(error => console.error('Error:', error));
    }



    function addToCarts(productId, button) {
        fetch('cart_operations.php', {

                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `action=add&product_id=${productId}`
            })
            .then(response => response.json())
            .then(data => {

                if (data.error) {
                    alert(data.error);

                    return;
                }
                const basketCount = document.querySelector('#basket-count');

                if (basketCount) {
                    basketCount.textContent = data.count || '0';

                }

                alert('Item Added to cart Successfull!');

            })

            .catch(error => console.error('Error:', error))
            .finally(() => {

                if (button) button.disabled = false;

            })
    }











    document.querySelector('.hamburger').addEventListener('click', function() {
        document.querySelector('.nav__link').classList.toggle('active');
        const spans = this.querySelectorAll('span');
        spans[0].classList.toggle('rotate-45');
        spans[1].classList.toggle('opacity-0');
        spans[2].classList.toggle('rotate--45');
    });
    </script>

</html>