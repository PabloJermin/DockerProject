<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // For demonstration purposes, let's use a hard-coded username and password
    $correct_username = "yoga";
    $correct_password = "yes000";

    // Check if the username and password are correct
    if ($username == $correct_username && $password == $correct_password) {
        // Successful login
        echo "Login successful! Welcome, " . $username . ".";
    } else {
        // Failed login
        header("Location: error.html");
        exit()
    }
} else {
    echo "Invalid request method.";
}
?>
