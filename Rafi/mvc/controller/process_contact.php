<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function clean_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $name = clean_input($_POST["name"]);
    $email = clean_input($_POST["email"]);
    $subject = clean_input($_POST["subject"]);
    $message = clean_input($_POST["message"]);

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }

    if (empty($subject)) {
        $errors[] = "Subject is required.";
    }

    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }

    if (count($errors) > 0) {
        echo "<h2>Validation Errors:</h2><ul>";
        foreach ($errors as $error) {
            echo "<li style='color:red;'>$error</li>";
        }
        echo "</ul><a href='javascript:history.back()'>Go back</a>";
    } else {
        // Store values in session
        $_SESSION["contact_name"] = $name;
        $_SESSION["contact_email"] = $email;
        $_SESSION["contact_subject"] = $subject;
        $_SESSION["contact_message"] = $message;

        echo "<h2 style='color:green;'>Message submitted successfully!</h2>";
        echo "<p>Thank you, <strong>$name</strong>. We'll respond to your message about <strong>$subject</strong> soon.</p>";
        echo "<a href='/project/php/view/conatct.html'>Submit another message</a>";
    }
}
?>
