<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function clean_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $name = clean_input($_POST['name']);
    $review = clean_input($_POST['review']);

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (strlen($name) > 50) {
        $errors[] = "Name must be less than 50 characters.";
    }

    if (empty($review)) {
        $errors[] = "Review is required.";
    } elseif (strlen($review) > 300) {
        $errors[] = "Review must be less than 300 characters.";
    }

    if (count($errors) > 0) {
        echo "<h2 style='color:red;'>Form Errors:</h2><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='javascript:history.back()'>Go back</a>";
    } else {
        // This is where you'd store to DB or send email
        echo "<h2 style='color:green;'>Review submitted successfully!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Review:</strong> $review</p>";
        echo "<a href='ratings.html'>Back to Ratings</a>";
    }
}
?>
