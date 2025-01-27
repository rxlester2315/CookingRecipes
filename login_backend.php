<?php

include('database.php');

session_start();

// Form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    // Sanitize and validate input
    $em = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format"; // Invalid email format
    } else {
        $pw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        // Prepare the SQL statement
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $em);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            if (password_verify($pw, $user['password'])) {
                // Redirect to success login page

                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['usertype'] = $user['usertype'];

                //redirect base sa user type

                if($user['usertype'] == 'Normal User'){
                    header("Location: normal.php");
                }elseif($user['usertype'] == 'Chef User'){
                    header("Location: chef.php");

                }else{
                    header("Location: login.php");
                }


                exit(); // Stop further script execution
            } else {
                $message = "Invalid email or password";
            }
        } else {
            $message = "Invalid email or password";
        }

        $stmt->close();
    }
}


?>