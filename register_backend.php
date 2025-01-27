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