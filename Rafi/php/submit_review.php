<?php
session_start(); // Start or resume session

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
        // Store in session
        $_SESSION['last_name'] = $name;
        $_SESSION['last_review'] = $review;

        echo "<h2 style='color:green;'>Review submitted successfully!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Review:</strong> $review</p>";
        echo "<a href='ratings.html'>Back to Ratings</a>";

        // Optional: Show session data
        echo "<hr><h3>🔄 Last Submitted Data (Stored in Session)</h3>";
        echo "<p><strong>Name:</strong> " . $_SESSION['last_name'] . "</p>";
        echo "<p><strong>Review:</strong> " . $_SESSION['last_review'] . "</p>";
        echo "<p><a href='?logout=1'>Clear Session</a></p>";
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    echo "<p style='color:blue;'>Session cleared. <a href='ratingp.html'>Go back</a></p>";
    exit;
}
?>
