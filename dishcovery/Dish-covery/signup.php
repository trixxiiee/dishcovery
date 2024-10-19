<?php
require_once 'db_config.php';

// Now you can use $conn for database operations

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirmPassword = $_POST['confirmPassword'];
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Validate passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // Verify reCAPTCHA
    $secretKey = 'YOUR_SECRET_KEY'; // Replace with your reCAPTCHA secret key
    $response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse"
    );
    $responseData = json_decode($response);

    if (!$responseData->success) {
        echo "reCAPTCHA verification failed.";
        exit();
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare SQL to insert user
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close the connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="signup-container">
        <h2>DISH-COVERY</h2>
        <form id="signupForm">
            <label for="confirmPassword">Sign-up</label>
            <input type="text" id="Username" required placeholder="Username">
            <input type="text" id="Email" required placeholder="Email">
            <input type="password" id="Password" required placeholder="Password">
            <input type="password" id="confirmPassword" required placeholder="Confirm Password">
            <div class="g-recaptcha" data-sitekey="6Lf7EmMqAAAAAHMqBjFN_tnKRfRihEqnWA8Hmitz"></div>
            <button type="submit">Submit</button>
        </form>
        <div class="links">
            <a href="index.php"> </a>
      </div>
    </div>
    <script src="script1.js"></script>
</body>
</html>
