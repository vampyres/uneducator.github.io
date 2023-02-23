<?php
if ($_SERVER['REQUEST_METHOD'] === 'post') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $suggestion = $_POST['suggestion'];

    // Compose email
    $to = 'wyvernated@gmail.com';
    $subject = 'New Suggestion';
    $message = "Name: $name\nEmail: $email\nSuggestion: $suggestion";
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Thank you for your suggestion!';
    } else {
        echo 'There was a problem sending your suggestion. Please try again later.';
    }
}
?>
