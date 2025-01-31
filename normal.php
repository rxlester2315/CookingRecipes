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
                    <li><a href="order.php">Orders</a></li>
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




        <div class="row">
            <h1>Recent Dish</h1>
            <div class="recent-order">
                <div class="orderss">
                    <img src="spagheti.jpg" alt="">
                    <h3>Spaghetti</h3>
                    <p>Spaghetti is a long, thin, solid, cylindrical pasta. It is a staple food of traditional Italian
                        cuisine.
                        Like other pasta, spaghetti is made of milled wheat and water and sometimes enriched with
                        vitamins and minerals.
                        Italian spaghetti is typically made from durum wheat semolina.</p>
                    <button>Buy Again</button>
                </div>
                <div class="orderss">
                    <img src="chickenbiryani.jpg" alt="">
                    <h3>Chicken Biryani</h3>
                    <p>Chicken Biryani is a delicious savory rice dish that is loaded with spicy marinated chicken,
                        caramelized onions, and flavorful saffron rice.
                        For my Biryani, I simplify the order of operations, while retaining the traditional layered
                        approach to assembling it.</p>
                    <button>Buy Again</button>
                </div>
                <div class="orderss">
                    <img src="burgir.jpg" alt="">

                    <h3>Chicken Burger</h3>
                    <p>A chicken burger is a sandwich that typically consists of a boneless, skinless chicken breast
                        served between slices of bread or on a bun.
                        The chicken patty may be breaded or grilled, and it may also be marinated to add flavor.</p>
                    <button>Buy Again</button>
                </div>

            </div>
        </div>

    </body>


    <script>
    document.addEventListener("DOMContentLoaded", function() {

        updateCartCount();

    });



    document.querySelector('.hamburger').addEventListener('click', function() {
        document.querySelector('.nav__link').classList.toggle('active');
        const spans = this.querySelectorAll('span');
        spans[0].classList.toggle('rotate-45');
        spans[1].classList.toggle('opacity-0');
        spans[2].classList.toggle('rotate--45');
    });







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