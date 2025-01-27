<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)),
                /* White overlay with 40% opacity */
                url('bg.png');
            /* Background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }


        form {
            border: 1px solid transparent;
            padding: 20px;
            height: auto;
            margin: 20px;
            max-width: 100%;
            width: 400px;
            background-color: white;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            border-radius: 10px;



        }

        form button {
            padding: 10px 20px;
            background-color: rgb(18, 19, 17);
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            margin: 20px;
            width: 300px;
            height: auto;
            max-width: 90%;

        }

        .social-login {
            display: flex;
            justify-content: space-evenly;
            width: 300px;
            margin-top: 20px;
            padding-bottom: 15px;
        }

        .social-login i {
            font-size: 25px;
            border: 1px solid grey;
            padding: 10px;
            border-radius: 50%;
            transition: background-color 0.3s ease, transform 0.3s ease;

        }


        .social-login i:hover {
            background-color: #444;
            /* Change to the background color you want on hover */
            transform: scale(1.1);
            /* Zoom in effect */
        }

        .social-login i:hover {
            transform: scale(1.1);
            background-color: #f1f1f1;
        }



        #fb {
            color: #1877F2;
        }

        #google {
            color: #DB4437;
        }

        #phone {
            color: #000;
        }

        .headers h3 {
            text-align: center;
            font-size: 30px;
        }

        .input-group {
            padding: 10px;
        }

        .input-group input {
            width: 300px;
            height: auto;
            max-width: 90%;
            border: 1px solid grey;
            border-radius: 5px;
            padding: 10px;
        }

        .term-conditionss {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            color: black;
            font-size: 15px;
            font-style: italic;
        }

        .term-conditionss a {
            text-decoration: none;
            color: red;
        }

        .term-conditionss input {
            margin-right: 10px;

        }

        .headers span {
            color: black;
            font-size: 13px;
            margin: 10px;
            text-align: center;
            display: flex;
            justify-content: center;


        }

        .headers span a {
            text-decoration: none;
            color: red;

        }
        </style>
    </head>

    <body>

        <form action="register_backend.php" method="POST">
            <div class="headers">

                <h3>Create Account</h3>
                <span>Already have an account? <a href="login.php">Login</a></span>
                <div class="social-login">
                    <i class="fa-brands fa-facebook-f" id="fb"></i>
                    <i class="fa-brands fa-google" id="google"></i>
                    <i class="fa-solid fa-phone" id="phone"></i>
                </div>



            </div>

            <div class="input-group">
                <input type="text" name="name" placeholder="Full Name" required>

            </div>


            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>

            </div>

            <div class="input-group">
                <input type="number" name="phone" placeholder="Phone Number" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>

            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Confirm Password" required>
            </div>

            <div class="term-conditionss">
                <input type="checkbox" name="terms" id="terms" required>
                <p>I agree to the terms and <a href="">conditions</a></p>

            </div>


            <button type="submit" name="signup">Submit</button>


        </form>



    </body>

</html>