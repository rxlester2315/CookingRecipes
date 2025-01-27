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
            height: 600px;
            margin: 20px;
            max-width: 110%;
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
            max-width: 90%;
            width: 100%;

            height: 45px;

        }

        .input-group {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 15px;
            position: relative;

        }

        .input-group input {
            padding: 15px 10px 10px 30px;
            font-size: 16px;
            max-width: 110%;
            width: 110%;
            border: 1px solid grey;
            border-radius: 8px;

        }

        .input-group i {
            position: absolute;
            left: 20px;
            /* Position the icon inside the input */
            font-size: 20px;
            /* Adjust the icon size */
            color: #888;
            /* Change the color of the icon */
        }

        .container-below {
            display: flex;
            justify-content: space-between;
            width: 300px;
        }

        .below-input {
            font-size: 14px;
            color: grey;
        }

        .below-input a {
            text-decoration: none;
            color: grey;

        }

        form span {
            color: grey;
            margin-top: 20px;
            font-size: 15px;

        }

        .social-login {
            display: flex;
            justify-content: space-evenly;
            width: 300px;
            margin-top: 40px;
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

        form h3 {
            color: #444;
            font-size: 30px;
            margin-bottom: 20px;
            font-style: italic;
        }

        .singup {
            margin-top: 30px;
            color: grey;
            font-size: 18px;
            font-style: italic;
        }

        .singup a {
            text-decoration: none;
            color: red;
        }
        </style>
    </head>

    <body>

        <form action="login_backend.php" method="POST">
            <div class="headers">
                <h3>Sign in Here</h3>
            </div>

            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <i class="fa-regular fa-user"></i>
            </div>

            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="container-below">
                <div class="below-input">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="below-input">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>

            <button type="submit" name="login">Submit</button>

            <?php if (isset($message)): ?>
            <div class="error-message"><?= $message ?></div>
            <?php endif; ?>

            <span>------Signup with-------</span>

            <div class="social-login">
                <i class="fa-brands fa-facebook-f" id="fb"></i>
                <i class="fa-brands fa-google" id="google"></i>
                <i class="fa-solid fa-phone" id="phone"></i>
            </div>

            <div class="singup">
                <p>Don't have an Account? <a href="register.php">Signup</a></p>
            </div>
        </form>




    </body>

</html>