<?php
session_start();

// Require configuration file
require_once 'includes/config.php';

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// CSRF Token Validation
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    custom_error_log('CSRF token validation failed');
    header("Location: index.php?status=error");
    exit();
}

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $name = sanitize_input($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = sanitize_input($_POST['message']);

    // Validate inputs
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If no errors, send email
    if (empty($errors)) {
        $to = CONTACT_EMAIL;
        $subject = "New Contact Form Submission from Portfolio";
        
        $email_body = "You have received a new message from your portfolio contact form.\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Message:\n$message";

        // Additional headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        // Send email
        try {
            $mail_sent = mail($to, $subject, $email_body, $headers);

            if ($mail_sent) {
                // Log successful submission
                custom_error_log("Message sent successfully from $name ($email)");
                
                // Redirect with success message
                header("Location: index.php?status=success");
                exit();
            } else {
                // Log email sending failure
                custom_error_log("Failed to send email from $name ($email)");
                
                // Redirect with error message
                header("Location: index.php?status=error");
                exit();
            }
        } catch (Exception $e) {
            // Log any unexpected errors
            custom_error_log("Exception in email sending: " . $e->getMessage());
            header("Location: index.php?status=error");
            exit();
        }
    } else {
        // Log validation errors
        custom_error_log("Form validation failed: " . implode(', ', $errors));
        
        // Redirect back with error messages
        $_SESSION['form_errors'] = $errors;
        header("Location: index.php?status=validation_error");
        exit();
    }
} else {
    // If accessed directly without POST
    custom_error_log("Attempted access without POST method");
    header("Location: index.php");
    exit();
}