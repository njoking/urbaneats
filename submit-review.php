<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $review = $_POST["review"];

    // Create a formatted string for the review
    $reviewData = "Name: $name\n";
    if (!empty($email)) {
        $reviewData .= "Email: $email\n";
    }
    $reviewData .= "Review: $review\n";

    // File to store reviews
    $file = "reviews.txt";

    // Open the file in append mode
    $fileHandle = fopen($file, "a");

    // Write the review data to the file
    if ($fileHandle) {
        fwrite($fileHandle, $reviewData . "\n");

        // Close the file handle
        fclose($fileHandle);

        // Redirect back to the page with a success message
        header("Location: about.html?status=success");
        exit;
    } else {
        // Redirect back to the page with an error message
        header("Location: about.html?status=error");
        exit;
    }
} else {
    // Redirect back to the page if accessed directly
    header("Location: about.html");
    exit;
}
?>
