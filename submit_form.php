<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can handle the form submission, like sending an email or saving the data to a database

    echo "Thank you, $name. We have received your message.";
} else {
    echo "Form submission error.";
}
?>