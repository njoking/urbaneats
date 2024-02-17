<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email to the restaurant
    $to = "restaurant@example.com"; // Change this to your restaurant's email address
    $subject = "New message from Urban Fast Eats";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Set headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // If accessed directly, redirect to the homepage
    header("Location: index.html");
    exit;
}
?>
