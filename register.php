<?php
include('database.php');



// Form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup'])) {
    // Sanitize and fetch input
    $fname = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $em = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phonesnum = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $pw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Hash the password
    $hashpw = password_hash($pw, PASSWORD_DEFAULT);

    $usertype = 'Normal User';

    // Prepare the SQL statement
    $sql = "INSERT INTO users (name, email, phone, password,usertype) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $fname, $em, $phonesnum, $hashpw, $usertype);

    if ($stmt->execute()) {
        // Redirect to success page
        header("Location: login.php?success=1");
        exit(); // Stop further script execution
    } else {
        $message = "Error: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>




<!DOCTYPE html>
<html>

    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="slide navbar style.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="cssfile/style1.css">

    </head>

    <body>

        <div class="containers">
            <div class="boxes">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <h1>Register</h1>

                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control"
                            required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <input type="number" name="phone" id="phone" placeholder="Phone" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <button type="submit" name="signup">Sign up</button>

                    </div>


                    <div class="form-group">
                        <p>Don't have an account? <a href="login.php">Login</a></p>
                    </div>

                </form>
            </div>
        </div>

    </body>

</html>