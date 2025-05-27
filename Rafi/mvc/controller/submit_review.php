<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Enhanced input cleaning function
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
        return $data;
    }

    // Get and clean inputs
    $name = isset($_POST['name']) ? clean_input($_POST['name']) : '';
    $review = isset($_POST['review']) ? clean_input($_POST['review']) : '';
    $rating = isset($_POST['rating']) ? intval($_POST['rating']) : 0;

    // Initialize error array
    $errors = [];

    // Validate name
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    } elseif (strlen($name) > 50) {
        $errors['name'] = "Name must be less than 50 characters.";
    }

    // Validate review
    if (empty($review)) {
        $errors['review'] = "Review is required.";
    } elseif (strlen($review) > 300) {
        $errors['review'] = "Review must be less than 300 characters.";
    }

    // Validate rating
    if ($rating < 1 || $rating > 5) {
        $errors['rating'] = "Please select a valid rating.";
    }

    // Handle errors or success
    if (!empty($errors)) {
        // Store errors and old input in session
        $_SESSION['form_errors'] = $errors;
        $_SESSION['old_input'] = [
            'name' => $name,
            'review' => $review,
            'rating' => $rating
        ];
        
    } else {

        $_SESSION['review_data'] = [
            'name' => $name,
            'review' => $review,
            'rating' => $rating,
            'date' => date('Y-m-d H:i:s')
        ];
        
    }
} else {
    // If not POST request, redirect to form
    header("Location: /project/php/view/ratingp.html");
    exit();
}